<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landing;
use App\Models\Room;
use App\Models\tamu;

class LandingController extends Controller
{
    public function index()
    {
        return view('landingPage', [
            "title" => "Home",
            "image" => "dist/img/kamar1.jpg"
        ]);
    }

    public function room()
    {
        return view('room', [
            "title" => "room"

        ]);
    }

    public function gallery()
    {
        return view('gallery', [
            "title" => "gallery",
            "image1" => "dist/img/kamar1.jpg",
            "image2" => "dist/img/kamar2.jpg"

        ]);
    }

    public function contact()
    {
        return view('contact', [
            "title" => "contact"

        ]);
    }

    public function booking()
    {
        $rooms = Room::all();

        return view('booking', compact('rooms'), [
            "title" => "booking"

        ]);
    }

    public function store(Request $request)
    {
        tamu::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
            'person' => $request->person,
            'tipe_kamar' => $request->tipe_kamar,
            'datang' => $request->tgl_datang,
            'pergi' => $request->tgl_pergi,
            'pesan' => $request->pesan,
        ]);
        //redirect ke urlnya
        return redirect('/');
    }
}
