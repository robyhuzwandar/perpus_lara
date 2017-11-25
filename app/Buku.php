<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pemrograman;

class Buku extends Model
{
  protected $table = 'buku';
  public $timestamps = false;
  protected $primaryKey = 'kodeBuku';
  public $incrementing = false;

//semua  attribut yg akan d pake di inisialisasi dulu di sini
    protected $fillable = ['kodeBuku', 'judul', 'penulis', 'penerbit', 'tahunTerbit',
     'gambar', 'kodeRak', 'kodeKolom', 'platform_id','pemrograman_id', 'stok'];


    //relasi antar table.. belongsTo ==> menyambungkan ke table
     public function pemrograman()
     {
//       return $this->belongsTo(Pemrograman::class);
         return$this->hasMany('App\Pemrograman');
     }

     public function platform()
     {
//       return $this->belongsTo(Platform::class);
         return$this->hasMany('App\Platform');
     }
}
