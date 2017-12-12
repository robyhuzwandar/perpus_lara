<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemrograman;
use App\Platform;
use App\Buku;
use File;
use Illuminate\Support\Facades\DB;

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
        $request->validate([
            'kodeBuku' => 'required|unique:buku,kodeBuku',
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

        return redirect()->route('buku.index');
    }

    public function index()
    {
        $bukus = DB::table('buku')
            ->join('pemrograman', 'pemrograman.id', '=', 'buku.pemrograman_id')
            ->join('platform', 'platform.id', '=', 'buku.platform_id')
            ->select('buku.*', 'pemrograman.nama as pem', 'platform.nama')
            ->get();


        return view('buku.index', compact('bukus'));
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

    public function update(Request $request, $kodeBuku)
    {
        $buku = Buku::find($kodeBuku);
        $gambarF = $request->gambar; //mengambil nama gambar di form

        if (!empty($gambarF)) {
            $gambar = time() . '.' . $gambarF->getClientOriginalExtension(); //membuat nama gambar baru
            request()->gambar->move(public_path('buku_gambar'), $gambar); //memindahkan gambar kefolder
            //delete gambar
            $bk = Buku::where('kodeBuku', $buku->kodeBuku)->first();
            $file_path = public_path() . '/buku_gambar/' . $bk->gambar;
            unlink($file_path);

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

        } else {
            $buku->update([
                'kodeBuku' => request('kodeBuku'),
                'judul' => request('judul'),
                'penulis' => request('penulis'),
                'penerbit' => request('penerbit'),
                'tahunTerbit' => request('tahunTerbit'),
                'kodeRak' => request('kodeRak'),
                'kodeKolom' => request('kodeKolom'),
                'platform_id' => request('platform_id'),
                'pemrograman_id' => request('pemrograman_id'),
                'stok' => request('stok')
            ]);
        }

        return redirect()->route('buku.view');
    }
}
