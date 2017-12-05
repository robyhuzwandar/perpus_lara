<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    public $table = 'platform';
    public $timestamps = false;
    public $fillable = ['nama'];


    public function Buku(){
        return $this->belongsTo('App\Buku');
    }
}
