<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Ukuran;
use App\User;
use App\Http\Controllers\Controller;
use App\Pemesanan;
use App\Transaksi;

class PelangganController extends Controller
{
    public function akunsaya()
    {
        return view ('user.akunsaya');
    }
    public function orderansaya()
    {
        $datas = Pemesanan::orderBy('id_pemesanan', 'DESC')->paginate(10);
        return view('user.orderansaya', compact('datas'));
    }
}