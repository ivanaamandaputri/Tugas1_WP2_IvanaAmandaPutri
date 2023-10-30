<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::orderBy('id', 'desc')->get();
        return view('v_anggota.index', [
            'judul' => 'Data Anggota',
            'index' => $anggota
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v_anggota.create', [
            'judul' => 'Tambah Anggota',
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:200',
            'email' => 'required|max:255|unique:anggota',
        ]);
        Anggota::create($validatedData);
        return redirect('/anggota');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::find($id);
        return view('v_anggota.edit', [
            'judul' => 'Ubah Anggota',
            'edit' => $anggota
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggota = Anggota::findOrFail($id);
        $rules = [
            'nama' => 'required|max:200',
        ];
        if ($request->email != $anggota->email) {
            $rules['email'] = 'required|max:255|unique:anggota';
        }

        $validatedData = $request->validate($rules);
        Anggota::where('id', $id)->update($validatedData);
        return redirect('/anggota');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect('/anggota');

    }
}
