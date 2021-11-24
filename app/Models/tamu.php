<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class tamu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'email', 'telp', 'person', 'tipe_kamar', 'datang', 'pergi', 'pesan'
    ];

    // static function getTamu()
    // {
    //     $return = DB::table('tamus')
    //         ->join('rooms', 'tamus.tipe_kamar', '=', 'rooms.id');
    //     return $return;
    // }

    public function tamu()
    {
        return $this->belongsTo(Room::class, 'tipe');
    }
}
