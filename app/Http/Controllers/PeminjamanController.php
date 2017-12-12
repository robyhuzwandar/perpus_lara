<?php

namespace App\Http\Controllers;

use App\Buku;
use App\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function create(){
        $buku = Buku::all();
        $user = User::all();
        return view('transaksi.peminjaman', compact('buku','user'));
    }

    public function index(){

    }
}
