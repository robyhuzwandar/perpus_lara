<?php

namespace App\Http\Controllers;

use App\Pemrograman;
use Illuminate\Http\Request;

class PemrogramanController extends Controller
{
    public function create()
    {
        return view('pemrograman.create');
    }

    public function store()
    {
        Pemrograman::create([
            'nama' => request('nama')
        ]);
        return redirect()->route('pemrograman.create')->with('Data Berhasil di tambahkan');
    }

    public function index()
    {
        $pemrograman = Pemrograman::all();
        return view('pemrograman.index', compact('pemrograman'));
    }

    public function destroy(Pemrograman $pemrograman)
    {
        $pemrograman->delete();
        return back();
    }

    public function edit($id)
    {
        $pemrograman = Pemrograman::find($id);
        return view('pemrograman.edit', compact('pemrograman'));
    }

    public function update(Request $request, $id)
    {
        $pemrograman = Pemrograman::find($id);
        $pemrograman->update([
            'nama' => request('nama')
        ]);
        return redirect(route('pemrograman.index'));
    }

}
