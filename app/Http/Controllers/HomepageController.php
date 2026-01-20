<?php

namespace App\Http\Controllers;

use App\Repositories\Interface\TestimonialRepositoryInterface;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected $testimonialRepository;

    public function __construct(TestimonialRepositoryInterface $testimonialRepository) {
        $this->testimonialRepository = $testimonialRepository;
    }

    public function index()
    {
        $testimonials = $this->testimonialRepository->get(with: ['user']);
        return view('landingpage._maincontent', ['testimonials' => $testimonials]);
    }
}
