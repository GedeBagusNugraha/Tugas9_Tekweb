<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    use HasFactory;
    public $primarykey = 'id';
    protected $fillable = [
        'nim', 'nama', 'email', 'no_telp', 'alamat', 'id_barang'
    ];

    static function getMahasiswa(){
        $return = DB::table('mahasiswas')
        ->join('barangs','mahasiswas.id_barang','=','barangs.id_barang');
        return $return;
    }

    //public function barang()
    //{
    //    return $this->belongsTo(Barang::class, 'id_barang');
    //}
}
