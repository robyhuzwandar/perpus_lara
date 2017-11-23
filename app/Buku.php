<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pemrograman;

class Buku extends Model
{
  public $table = 'buku';
  public $timestamps = false;

    protected $fillable = ['kodeBuku', 'judul', 'penulis', 'penerbit', 'tahunTerbit',
     'gambar', 'kodeRak', 'kodeKolom', 'platform_id','pemrograman_id', 'stok'];

     public function pemrograman()
     {
       return $this->belongsTo(Pemrograman::class);
     }

     public function platform()
     {
       return $this->belongsTo(Platform::class);
     }
}
