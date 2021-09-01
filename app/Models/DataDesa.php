<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDesa extends Model
{
    use HasFactory;

    /* dari tabel turunan ambil data ke tabel induk */
    public function kecamatan()
    {
        return $this->belongsTo('App\Models\DataKec');
    }

    /* nek tabel e ora ke detect, nagnggo fungsi iki yo iso,
    atau nek misal gawe database + tabel e langsung neng phpmyadmin, ora melalui php artisan make:migration
    fungsi iki enek neng Dokumentasi Laravel */
    protected $table = 'desa';

    /* di nggo deklarasi field sek oleh diisi + disimpen neng database */
    protected $fillable = [
        'kecamatan_id',
        'kode_desa',
        'nama_desa',
        'reje_kampung',
        'nama_camat',
        'nip',
        'alamat',
        'kode_pos'
    ];
}
