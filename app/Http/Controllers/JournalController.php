<?php

namespace App\Http\Controllers;

use App\Http\Requests\JournalRequest;
use App\Models\PaymentMethod;
use App\Repositories\Interface\JournalRepositoryInterface;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    protected $journalRepository;

    public function __construct(JournalRepositoryInterface $journalRepository)
    {
        $this->journalRepository = $journalRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function pos()
    {
        $paymentMethods = PaymentMethod::all();
        return view('pages.pos._journalHarian', ['paymentMethods' => $paymentMethods]);
    }

    public function report(Request $request)
    {
        if ($request->has('month') && $request->has('year')) {
            $period = [
                'month' => $request->input('month'),
                'year' => $request->input('year'),
            ];
            $journalReport = $this->journalRepository->report($period);
        } else {
            $journalReport = collect(); // Empty collection if no period is provided
        }

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
