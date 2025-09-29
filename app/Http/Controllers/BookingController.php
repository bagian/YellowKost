<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Repositories\Interface\BookingRepositoryInterface;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $bookingRepository;

    public function __construct(BookingRepositoryInterface $bookingRepository) {
        $this->bookingRepository = $bookingRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.form-penyewa.forminputs');
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
        $booking = $this->bookingRepository->create($request->safe()->toArray());
        
        return $booking;
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
