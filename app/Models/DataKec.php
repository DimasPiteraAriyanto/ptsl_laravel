<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKec extends Model
{
    use HasFactory;

    /* dari tabel turunan ambil data ke tabel induk */
    public function kabupaten()
    {
        return $this->belongsTo('App\Models\DataKab');
    }

    protected $table = 'kecamatan';

    protected $fillable = [
        'kabupaten_id',
        'nama_kecamatan'
    ];
}
