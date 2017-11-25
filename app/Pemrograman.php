<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemrograman extends Model
{
    public $timestamps = false;
    public $table = 'pemrograman';

    public $fillable = ['nama'];

    public function Buku()
    {
        return $this->belongsTo('App\Buku');
    }
}
