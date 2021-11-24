<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\tamu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::getRoom()->paginate(5);
        // return view('adminPage', compact('rooms'), [
        //     "title" => "Room"
        // ]);
        return response()->json($rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addRoom', [
            "title" => "add"

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Room::create([
        //     'tipe' => $request->type,
        //     'harga' => $request->price,
        //     'jumlah' => $request->amount,
        //     'fasilitas' => $request->facilites
        // ]);

        $validasi = $request->validate([
            'tipe' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'fasilitas' => 'required',
            'foto' => 'required|file|mimes:png,jpg'
        ]);
        try {
            $fileName = time() . $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('dist/img', $fileName);
            $validasi['foto'] = $path;
            $response = Room::create($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage()
            ]);
        }

        //redirect ke urlnya
        // return redirect('admin-room');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $room = Room::findorfail($id);
        return view('editRoom', compact('room'), [
            "title" => "Edit Room"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $room = Room::findorfail($id);
        // $room->update($request->all());
        // return redirect('admin-room');
        $validasi = $request->validate([
            'tipe' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'fasilitas' => 'required',
            'foto' => ''
        ]);
        try {
            if ($request->file('foto')) {
                $fileName = time() . $request->file('foto')->getClientOriginalName();
                $path = $request->file('foto')->storeAs('dist/img', $fileName);
                $validasi['foto'] = $path;
            }
            $response = Room::find($id);
            $response->update($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $room = room::find($id);
            $room->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage()
            ]);
        }
    }
}
