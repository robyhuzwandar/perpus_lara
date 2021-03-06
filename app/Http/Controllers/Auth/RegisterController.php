<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'nohp' => 'required|string|email|max:255|unique:staf',
            'password' => 'required|string|min:6|confirmed',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $f = request()->file('foto');
        $foto = time() . '.' . $f->getClientOriginalExtension(); //namagambar
        request()->foto->move(public_path('staf_foto'), $foto); //memindahkan gambar kefolder
//        dd(request()->all());
        return User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'foto' => $foto,
            'level' => $data['level'],
            'alamat' => $data['alamat'],
            'nohp' => $data['nohp'],
            'agama' => $data['agama']
        ]);
    }
}
