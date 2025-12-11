<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\User;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\RoomRepositoryInterface;
use App\Repositories\Interface\TenantRepositoryInterface;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $bookingRepository, $roomRepository, $tenantRepository;

    public function __construct(BookingRepositoryInterface $bookingRepository, RoomRepositoryInterface $roomRepository, TenantRepositoryInterface $tenantRepository) {
        $this->bookingRepository = $bookingRepository;
        $this->roomRepository = $roomRepository;
        $this->tenantRepository = $tenantRepository;
    }

    public function form()
    {
        $bookings = $this->bookingRepository->getUserBooking(auth()->user()->id, ['pending']);

        if ($bookings->isEmpty()) {
            $bookingData = session('pending_booking', []);
    
            session()->forget('pending_booking');
    
            return view('landingpage.pages._bookingsRoom', compact('bookingData'));
        }

        return redirect()->route('booking.status');
    }

    /* -------------------------------------------------------------------------- */
    /*                                  For User                                  */
    /* -------------------------------------------------------------------------- */
    public function submit(BookingRequest $request)
    {
        // dd($request);
        // dd($request->safe());
        // dd($request->safe()->toArray());

        $dataBooking = $request->safe()->toArray();

        if (!auth()->check()) {
            session([
                'pending_booking' => $request->only(["full_name", "email", "phone", "parent_phone", 'address', "nik", "check_in"])
            ]);

            return redirect()->route('register');
        } else if (auth()->user()->role->slug == 'admin') {
            $userData['email'] = $request->input('email');
            $userData['password'] = bcrypt(substr(strtolower($request->input('full_name')), 0, 2) . substr($request->input('nik'), -4));

            $user = $this->tenantRepository->create($userData);
            $dataBooking['id_user'] = $user->id;
        }

        $booking = $this->bookingRepository->create($dataBooking);

        return redirect()->route('booking.status')->with('confirmation_booking', 'Booking submitted successfully.');
    }

    public function payment()
    {
        return view('pages.uploadBukti._uploadBukti');
    }

    public function paymentSubmit(Request $request)
    {
        $id_user = auth()->user()->id;
        $booking = Booking::where('id_user', $id_user)->where('status', 'pending')->orderBy('created_at', 'desc')->first();

        $request->validate([
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $data['payment_proof'] = $request->file('payment_proof');

        $data = $this->bookingRepository->update($booking, $data);

        return redirect()->route('booking.status')->with('success', 'Bukti pembayaran berhasil diunggah.');
    }

    public function status() {
        $booking = $this->bookingRepository->getUserBooking(auth()->user()->id);

        return view('pages.status._statusPengajuan', ['booking' => $booking]);
    }

    public function statusDetail(Request $request) {
        $data = $this->bookingRepository->find($request->input('id_booking'));

        $data->load('room');
        $data->loadSum('payments as total_paid', 'amount');

        return response()->json($data, 200, ['Content-Type' => 'application/json']);
    }

    /* -------------------------------------------------------------------------- */
    /*                                  For Admin                                 */
    /* -------------------------------------------------------------------------- */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = $this->bookingRepository->get();
        $room = $this->roomRepository->available();

        return view('pages.form-penyewa.forminputs', compact('booking', 'room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('pages.form-penyewa.forminputs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        if ($request->input('status') == 'confirmed') {
            $request->validate([
                'id_room' => 'required|exists:rooms,id',
            ]);
        }

        $dataBooking = $request->except('_token', '_method', 'full_name', 'nik', 'phone', 'parent_phone', 'payment_status');
        $dataUser = $request->except('_token', '_method', 'id_user', 'check_in', 'id_room', 'status', 'payment_status');
        // dd($dataBooking, $dataUser);

        $user = User::find($request->input('id_user'));

        $booking = $this->bookingRepository->update($booking, $dataBooking);
        $user = $this->tenantRepository->update($user, $dataUser);

        if ($dataBooking['status'] == 'confirmed' && ($request->input('payment_status') === 'paid' || $request->input('payment_status') === 'dp')) {
            return redirect()->route('journal.pos', ['booking_id' => $booking->id]);
        } else {
            return redirect()->back()->with('success', 'Booking updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}