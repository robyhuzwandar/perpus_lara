<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemrograman extends Model
{
  public $table = 'pemrograman';

  public function Buku(){
      return $this->belongsTo('App\Buku');
  }
}
