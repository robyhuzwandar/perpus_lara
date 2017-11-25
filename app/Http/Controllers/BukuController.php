<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemrograman;
use App\Platform;
use App\Buku;
use File;

class BukuController extends Controller
{

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


        $gambar = time() . '.' . request()->gambar->getClientOriginalExtension(); //namagambar

        request()->gambar->move(public_path('buku_gambar'), $gambar); //memindahkan gambar kefolder

        Buku::create([
            'kodeBuku' => request('kodeBuku'),
            'judul' => request('judul'),
            'penulis' => request('penulis'),
            'penerbit' => request('penerbit'),
            'tahunTerbit' => request('tahunTerbit'),
            'gambar' => $gambar,
            'kodeRak' => request('kodeRak'),
            'kodeKolom' => request('kodeKolom'),
            'platform_id' => request('platform_id'),
            'pemrograman_id' => request('pemrograman_id'),
            'stok' => request('stok')
        ]);

        return redirect()->route('buku.view');
    }

    public function view()
    {
        $bukus = Buku::all();
        return view('buku.view', compact('bukus'));
    }

    public function destroy(Request $request)
    {
        $buku = Buku::where('kodeBuku', $request->kodeBuku)->first();
        $file_path = public_path() . '/buku_gambar/' . $buku->gambar;
        $buku->delete();
        unlink($file_path);
        return back();
    }

    public function edit($kodeBuku)
    {
        $buku = Buku::find($kodeBuku);

        $pemrogramans = Pemrograman::all();
        $platforms = Platform::all();
        return view('buku.edit', compact('buku', 'pemrogramans', 'platforms'));
    }

    public function update($kodeBuku)
    {
        $buku = Buku::find($kodeBuku);

        $gambar = time() . '.' . request()->gambar->getClientOriginalExtension(); //namagambar
        request()->gambar->move(public_path('buku_gambar'), $gambar); //memindahkan gambar kefolder

        $buku->update([
            'kodeBuku' => request('kodeBuku'),
            'judul' => request('judul'),
            'penulis' => request('penulis'),
            'penerbit' => request('penerbit'),
            'tahunTerbit' => request('tahunTerbit'),
            'gambar' => $gambar,
            'kodeRak' => request('kodeRak'),
            'kodeKolom' => request('kodeKolom'),
            'platform_id' => request('platform_id'),
            'pemrograman_id' => request('pemrograman_id'),
            'stok' => request('stok')
        ]);
    }
}
