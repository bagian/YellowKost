<?php

namespace App\Http\Controllers;

use App\Http\Requests\JournalRequest;
use App\Models\PaymentMethod;
use App\Repositories\Interface\BookingRepositoryInterface;
use App\Repositories\Interface\JournalRepositoryInterface;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    protected $journalRepository, $bookingRepository;

    public function __construct(JournalRepositoryInterface $journalRepository, BookingRepositoryInterface $bookingRepository)
    {
        $this->journalRepository = $journalRepository;
        $this->bookingRepository = $bookingRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function pos(Request $request)
    {
        $activityData = $request->toArray();
        $bookingId = $request->query('booking_id') ?? null;
        $paymentMethods = PaymentMethod::all();
        $confirmedBookings = $this->bookingRepository->confirmedBookings();
        return view('pages.pos._journalHarian', ['paymentMethods' => $paymentMethods, 'confirmedBookings' => $confirmedBookings, 'bookingId' => $bookingId, ...compact('activityData')]);
    }

    public function report(Request $request)
    {
        if ($request->has('month') && $request->has('year')) {
            $period = [
                'month' => $request->input('month'),
                'year' => $request->input('year'),
            ];
        } else {
            $period = [
                'month' => date_format(now(), 'm'),
                'year' => date_format(now(), 'Y'),
            ];
        }

        $journalReport = $this->journalRepository->report($period);

        return view('pages.reports._journalReport', ['journalReport' => $journalReport]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JournalRequest $request)
    {
        $jornal = $this->journalRepository->create($request->safe()->toArray());

        return redirect()->back()->with('success', 'Journal entry created successfully.');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
