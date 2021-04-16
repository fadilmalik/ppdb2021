<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nis', 'nama', 'jns_kelamin', 'temp_lahir', 'tgl_lahir',
        'alamat', 'asal_sekolah', 'kelas', 'jurusan'
    ];
}
