<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function menampilkan(Request $request){
        $menu = Menu::all();
        $kategori = Kategori::all();

        // $id = $request->get('id');
        // if ($id) {
        //     $menu = Menu::where('id', $id)->get();
        // }else {
        //     $menu = Menu::orderBy('created_at', 'desc')->get();
        // }
   return view('kasir.frontend', compact('menu','kategori'));
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('kasir.show', compact('menu'));
    }

}
