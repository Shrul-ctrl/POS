<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\User;

class RekapanController extends Controller
{
    public function index()
    {
        $user = User::all();
        $rekapan = pembayaran::orderBy('id', 'desc')->get();
        return view('kasir.rekapan', compact('rekapan','user'));
    }

    public function cetakRekapan()
    {
        $user = User::all();
        $cetakrekapan = pembayaran::orderBy('id', 'desc')->get();
        return view('kasir.cetak-rekapan', compact('cetakrekapan','user'));
    }

    public function filter(Request $request)
{
    $tgl_mulai = $request->tgl_mulai;
    $tgl_selesai = $request->tgl_selesai;

    // Query untuk mengambil data rekapan berdasarkan rentang tanggal
    $rekapan = Pembayaran::whereDate('created_at', '>=', $tgl_mulai)
                         ->whereDate('created_at', '<=', $tgl_selesai)
                         ->get();

    return view('kasir.rekapan', compact('rekapan'));
}

}
