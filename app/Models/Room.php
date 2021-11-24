<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = [
        'tipe', 'harga', 'jumlah', 'fasilitas', 'foto'
    ];

    static function getRoom()
    {
        $return = DB::table('rooms');
        return $return;
    }
}
