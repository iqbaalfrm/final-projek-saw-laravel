<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kriteria';
        $kriterias = Kriteria::all();
        return view('admin.kriteria.index', compact('title', 'kriterias'));
    }

    public function saveCriteria(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'alternatif_id' => 'required|exists:alternatifs,id',
            // Validation rules for each kriteria input, adjust as needed
        ]);

        // Process and store the criteria values
        $alternatifId = $request->input('alternatif_id');
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'kriteria_') === 0) {
                $kriteriaId = substr($key, strlen('kriteria_'));
                // Save $value to your database, e.g., Nilai::create([...]);
            }
        }

        // Redirect or return response
        return redirect()->back()->with('success', 'Nilai kriteria berhasil disimpan.');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'atribut' => 'required|in:benefit,cost',
            'bobot' => 'required|numeric',
        ]);
    
        Kriteria::create([
            'nama_kriteria' => $request->input('nama_kriteria'),
            'atribut' => $request->input('atribut'),
            'bobot' => $request->input('bobot'),
        ]);
    
        return redirect()->route('kriteria.index')->with('msg', 'Kriteria berhasil ditambahkan.');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('admin.kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'atribut' => 'required|in:benefit,cost',
            'bobot' => 'required|numeric',
        ]);

        try {
            $kriteria = Kriteria::findOrFail($id);
            $kriteria->update([
                'nama_kriteria' => $request->nama_kriteria,
                'atribut' => $request->atribut,
                'bobot' => $request->bobot,
                'updated_at' => now()
            ]);

            return redirect()->route('kriteria.index')->with('msg', 'Kriteria berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('kriteria.index')->with('error', 'Terjadi kesalahan saat memperbarui kriteria.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $kriteria = Kriteria::findOrFail($id);
            $kriteria->delete();
    
            return redirect()->route('kriteria.index')->with('msg', 'Kriteria berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('kriteria.index')->with('error', 'Terjadi kesalahan saat menghapus kriteria.');
        }
    }
    


public function destroyAll()
{
    try {
        Kriteria::truncate(); 

        return redirect()->route('kriteria.index')->with('msg', 'Semua kriteria berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('kriteria.index')->with('error', 'Terjadi kesalahan saat menghapus semua kriteria.');
    }
}

    
    
}
