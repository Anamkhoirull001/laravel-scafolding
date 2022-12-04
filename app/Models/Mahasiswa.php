<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';  //deklarasi pimarykey yaitu nim
    public $incrementing = false;
    protected $keyType = "string";

    protected $fillable = [
        'nim',
        'nama',
        'umur',
        'alamat',
        'kota',
        'kelas',
        'jurusan',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/mahasiswas/' . $this->getKey());
    }
}
