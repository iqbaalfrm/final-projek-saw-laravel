<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Alternatif';
        $alternatifs = Alternatif::all();
        return view('admin.alternatif.index', compact('title', 'alternatifs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alternatif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    try {
        $request->validate([
            'nama_alternatif' => 'required|string|max:255',
        ]);

        $alternatif = new Alternatif();
        $alternatif->nama_alternatif = $request->nama_alternatif;
        $alternatif->save();

        return redirect()->back()->with('msg', 'Alternatif berhasil ditambahkan.');
    } catch (\Throwable $th) {
        return redirect()->back()->with('error', 'Terjadi kesalahan, coba lagi nanti.');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Alternatif $alternatif)
    {
        return view('admin.alternatif.show', compact('alternatif'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alternatif $alternatif)
    {
        return view('admin.alternatif.edit', compact('alternatif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        $request->validate([
            'nama_alternatif' => 'required',
        ]);

        $alternatif->update([
            'nama_alternatif' => $request->nama_alternatif,
        ]);

        return redirect()->route('alternatif.index')->with('success', 'Alternatif berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $alternatif = Alternatif::findOrFail($id);
            $alternatif->delete();
    
            return redirect()->back()->with('success', 'Alternatif berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi kesalahan, coba lagi nanti.');
        }
    }
    
}
