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

    public function form()
    {
        $bookingData = session('pending_booking', []);

        session()->forget('pending_booking');

        return view('landingpage.pages._bookingsRoom', compact('bookingData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    public function submit(BookingRequest $request) {
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
        
        return redirect()->route('home')->with('success', 'Booking submitted successfully.');
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
        dd($request);
        $dataBooking = $request->except('_-token', '_method', 'id_user', 'tenant', 'nik', 'phone', 'parent_phone');
        $dataUser = $request->except('_-token', '_method', 'id_user', 'check_in', 'id_room', 'status');

        $user = User::find($request->input('id_user'));

        $booking = $this->bookingRepository->update($booking, $dataBooking);
        $user = $this->tenantRepository->update($user, $dataUser);

        return redirect()->back()->with('success', 'Booking updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}