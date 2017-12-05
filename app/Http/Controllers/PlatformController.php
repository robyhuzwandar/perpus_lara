<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platform;

class PlatformController extends Controller
{
    public function create()
    {
        return view('platform.create');
    }

    public function store(Request $request)
    {

        $valid = $this->validate(
            $request, ['nama' => 'required|unique:platform,nama',]
        );

        Platform::create([
            'nama' => request('nama')
        ]);
        \Session::flash('success', 'Insert Data Sukses');

        return redirect()->route('platform.create');
    }

    public function index()
    {
        $platform = Platform::all();
        return view('platform.index', compact('platform'));
    }

    public function destroy(Platform $platform)
    {
        $platform->delete();
        return back();
    }

    public function edit($id)
    {
        $platform = platform::find($id);
        return view('platform.edit', compact('platform'));
    }

    public function update(Request $request, $id)
    {
        $platform = platform::find($id);
        $platform->update([
            'nama' => request('nama')
        ]);
        return redirect(route('platform.index'));
    }
}
