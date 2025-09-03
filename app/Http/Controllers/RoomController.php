<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoomResource;
use App\Models\Room;
use App\Http\Requests\RoomRequest;
use App\Repositories\Interface\RoomRepositoryInterface;

class RoomController extends Controller
{
    protected $roomRepository;

    public function __construct(RoomRepositoryInterface $roomRepository) {
        $this->roomRepository = $roomRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = $this->roomRepository->allWithPictures();

        return RoomResource::collection($room);
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
    public function store(RoomRequest $request)
    {
        $data = $request->safe()->except('pictures');

        $pictures = $request->file('pictures', []);

        $room = $this->roomRepository->createWithPictures($data, $pictures);

        return new RoomResource($room->load('pictures'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return new RoomResource($room->load('pictures'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomRequest $request, Room $room)
    {
        $data = $request->safe()->except('pictures');

        $pictures = $request->file('pictures', []);

        $room = $this->roomRepository->update($room, $data, $pictures);

        return new RoomResource($room->load('pictures')); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room = $this->roomRepository->delete($room);
    }
}