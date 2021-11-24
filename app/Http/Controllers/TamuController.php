<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use App\Models\Room;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamus = tamu::all();
        return view('adminTamu', compact('tamus'), [
            "title" => "Tamu"
        ]);
        // return response()->json($tamus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tamu::create([
            'nama' => $request->type,
            'email' => $request->price,
            'jumlah' => $request->amount,
            'fasilitas' => $request->facilites
        ]);
        //redirect ke urlnya
        return redirect('admin-tamu');

        // $validasi = $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'telp' => 'required|numeric',
        //     'person' => 'required',
        //     'tipe_kamar' => 'required',
        //     'datang' => 'required',
        //     'pergi' => 'required',
        //     'pesan' => '',
        // ]);
        // try {
        //     $response = Tamu::create($validasi);
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'success',
        //         'data' => $response
        //     ]);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'message' => 'Err',
        //         'errors' => $e->getMessage()
        //     ]);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rooms = Room::all();

        $tamu = tamu::findorfail($id);
        return view('editTamu', compact('rooms', 'tamu'), [
            "title" => "Edit Tamu"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tamu = tamu::findorfail($id);
        $tamu->update($request->all());
        return redirect('admin-tamu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tamu = tamu::findorfail($id);
        $tamu->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
