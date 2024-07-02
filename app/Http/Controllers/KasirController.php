<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class KasirController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasir = kasir::orderBy('id', 'desc')->get();
        return view('admin.kasir.index', compact('kasir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kasir' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:kasirs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $kasir = new kasir();
        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->alamat = $request->alamat;
        $kasir->jenis_kelamin = $request->jenis_kelamin;
        $kasir->kontrak = $request->kontrak;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->save();

        return redirect()->route('kasir.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(kasir $kasir)
    {
        return view('admin.kasir.show', compact('kasir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kasir $kasir)
    {
        return view('admin.kasir.edit', compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kasir $kasir)
    {
        $request->validate([
            'nama_kasir' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                // use Illuminate\Validation\Rule;
                Rule::unique('kasirs')->ignore($kasir->id)
            ],
        ]);

        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->alamat = $request->alamat;
        $kasir->jenis_kelamin = $request->jenis_kelamin;
        $kasir->kontrak = $request->kontrak;
        $kasir->email = $request->email;
        $kasir->save();
        return redirect()->route('kasir.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kasir $kasir)
    {
        if (Auth::kasir()->id != $kasir->id) {
            $kasir->delete();
            return redirect()->route('kasir.index');
        }
        return redirect()->route('kasir.index');
    }
}