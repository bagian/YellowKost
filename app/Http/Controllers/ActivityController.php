<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActivityResource;
use App\Repositories\Interface\ActivityRepositoryInterface;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $activityRepository;

    public function __construct(ActivityRepositoryInterface $activityRepository) {
        $this->activityRepository = $activityRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $activity = $this->activityRepository->get(with: ['user', 'room']);
        $activity->getCollection()->transform(function ($activity) {
            return (new ActivityResource($activity))->resolve();
        });
        $activePage = $request->activePage ?? 'all';
        // dd($activity);

        return view('pages.maintenance._maintenanceDashboard', ['activity' => $activity, 'activePage' => $activePage]);
    }

    public function getData(Request $request)
    {

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
    public function store(Request $request)
    {
        $data = $request->only('title', 'id_room', 'category', 'amount', 'priority', 'status');
        $data['date'] = now();
        $data['id_user'] = auth()->user()->id;

        $activity = $this->activityRepository->create($data);

        $activityData = [
            'type' => 'expends',
            'amount' => $activity->amount,
            'notes' => $activity->title,
        ];

        return redirect()->route('journal.pos', compact('activityData'));
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