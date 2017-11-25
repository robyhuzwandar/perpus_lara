<?php

namespace App\Http\Controllers;

use App\Pemrograman;
use Illuminate\Http\Request;

class PemrogramanController extends Controller
{
  public function create(){
      return view('pemrograman.create');
  }

  public function store(){
      Pemrograman::create([
          'nama' => request('nama')
      ]);

      return back();
  }
}
