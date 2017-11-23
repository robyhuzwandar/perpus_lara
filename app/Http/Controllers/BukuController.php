<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemrograman;
use App\Platform;
use App\Buku;

class BukuController extends Controller
{

  public function index()
  {
    // $buku = Buku::all();
    // return view('post.index', compact('buku'));
  }

  public function create()
  {
    $pemrogramans = Pemrograman::all();
    $platforms = Platform::all();
    return view('buku.create', compact('pemrogramans', 'platforms'));

  }


  public function store(Request $request)
  {
      request()->validate([

          'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);


      $gambar = time().'.'.request()->gambar->getClientOriginalExtension();

      request()->gambar->move(public_path('buku_gambar'), $gambar);

      Buku::create([
        'kodeBuku' => request('kodeBuku'),
        'judul' => request('judul'),
        'penulis' => request('penulis'),
        'penerbit' => request('penerbit'),
        'tahunTerbit' => request('tahunTerbit'),
        'gambar' => $gambar,
        'kodeRak' => request('kodeRak'),
        'kodeKolom' =>request('kodeKolom'),
        'platform_id' => request('platform_id'),
        'pemrograman_id' =>request('pemrograman_id'),
        'stok' => request('stok')

      ]);

      return $this->view('buku.vew');
  }

  public  function view(){
      $bukus = Buku::all();
      return view('buku.view', compact('bukus'));
  }
}
