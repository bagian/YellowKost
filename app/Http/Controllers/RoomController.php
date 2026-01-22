<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoomResource;
use App\Models\Room;
use App\Http\Requests\RoomRequest;
use App\Repositories\Interface\RoomRepositoryInterface;
use Illuminate\Http\Request;

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
        $room = $this->roomRepository->setPaginationOptions(orderBy: 'desc')->getWithPictures();
        // dd($room);

        return view('pages.kamar.views', ['room' => $room]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request)
    {
        $data = $request->safe()->except('pictures');

        $pictures = $request->file('pictures', []);

        $room = $this->roomRepository->createWithPictures($data, $pictures);

        return redirect()->route('kamar.index')->with(['success' => "Data berhasil ditambahkan!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        // dd($room->load('pictures'));
        return view('pages.kamar.show', ['room' => $room->load('pictures')]);

        /**
         * NOTES
         * - return resource lebih tepat buat API karena sudah otomatis di handle laravel menjadi JSON tipe data nya
         * - kalau resource nya gak di return tapi di taruh di variable dan di render ke blade maka tipenya masih tetap object resource bukan json
         */
        // return new RoomResource($room->load('pictures'));
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
        // dd($data);
        $data = $request->safe()->except('pictures');

        $pictures = $request->file('pictures', []);

        $room = $this->roomRepository->update($room, $data, $pictures);

        return redirect()->route('kamar.index')->with(['success' => "Data berhasil di perbarui!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room = $this->roomRepository->delete($room);

        return redirect()->route('kamar.index')->with(["success" => "Data Berhasil Dihapus!"]);
    }
}