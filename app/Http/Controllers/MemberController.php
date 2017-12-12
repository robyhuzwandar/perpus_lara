<?php

namespace App\Http\Controllers;

use App\Member;
use Dotenv\Validator;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create()
    {
        return view('member.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:member,nim',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:255',
            'tglLahir' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $foto = time() . '.' . request()->foto->getClientOriginalExtension();
        request()->foto->move(public_path('member_foto'), $foto);

        dd(request()->all());

        Member::create([
            'nama' => request('nama'),
            'nim' => request('nim'),
            'email' => request('email'),
            'nohp' => request('nohp'),
            'alamat' => request('alamat'),
            'tglLahir' => request('tglLahir'),
            'foto' => $foto
        ]);
    }


    public function edit(Member $member){
        return view('member.edit', compact('member'));
    }

    public function update(Member $member, Request $request){

        $request->validate([
            'nim' => 'required|unique:member,nim',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:255',
            'tglLahir' => 'required|string|max:255',
        ]);

        if ($request->hasFile('foto')){
            $foto = time() . '.' . request()->foto->getClientOriginalExtension();
            request()->foto->move(public_path('member_foto'), $foto);
            File::delete(public_path() . '/buku_gambar/' .$member->foto);

            $member->update([
                'nama' => request('nama'),
                'nim' => request('nim'),
                'email' => request('email'),
                'nohp' => request('nohp'),
                'alamat' => request('alamat'),
                'tglLahir' => request('tglLahir'),
                'foto' => $foto
            ]);
        }else{
            $member->update([
                'nama' => request('nama'),
                'nim' => request('nim'),
                'email' => request('email'),
                'nohp' => request('nohp'),
                'alamat' => request('alamat'),
                'tglLahir' => request('tglLahir'),
            ]);
        }


    }

    public function index(){
        $member = Member::all();
        return view('member');
    }
}
