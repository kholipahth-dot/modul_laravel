<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Karena primary key bukan 'id' (tapi nim), kita harus mendefinisikannya
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';

    // Daftarkan kolom yang boleh diisi secara massal
    protected $fillable = ['nim', 'nama', 'kelas', 'matakuliah']; 
}