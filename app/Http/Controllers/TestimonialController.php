<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Repositories\Interface\TestimonialRepositoryInterface;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    protected $testimonialRepository;

    public function __construct(TestimonialRepositoryInterface $testimonialRepository) {
        $this->testimonialRepository = $testimonialRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = $this->testimonialRepository->getByUser(auth()->user()->id);
        // dd($testimonial);
        return view('pages.testimonials._createTestimonial', ['testimonial' => $testimonial]);
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
    public function store(TestimonialRequest $request)
    {
        $testimonial = $this->testimonialRepository->create($request->validated());

        return redirect()->back()->with('success', 'Testimonial submitted successfully!');
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
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial = $this->testimonialRepository->update($testimonial, $request->validated());

        return redirect()->back()->with('success', 'Testimonial updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
