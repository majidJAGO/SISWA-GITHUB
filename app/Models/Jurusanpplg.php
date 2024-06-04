<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusanpplg extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nis',
    //     'nama',
    //     'kelas_jurusan',
    //     'nama_ibu',
    //     'nama_ayah',
    //     'nama_wali' ,
    //     'no_telp_ibu',
    //     'no_telp_ayah',
    //     'no_telp_wali',
    //     'foto_siswa'
    // ];
    protected $table = 'jurusanpplg';
    protected $guarded = [];
}
