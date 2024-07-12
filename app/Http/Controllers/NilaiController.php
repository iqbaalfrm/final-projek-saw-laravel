<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function create()
    {
        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::all();

        return view('admin.penilaian.create', compact('kriterias', 'alternatifs'));
    }

    public function store(Request $request)
    {
        
        $nilaiData = $request->input('nilai');

        foreach ($nilaiData as $id_alternatif => $kriteriaValues) {
            foreach ($kriteriaValues as $id_kriteria => $nilai) {
                Nilai::create([
                    'alternatif_id' => $id_alternatif,
                    'kriteria_id' => $id_kriteria,
                    'nilai' => $nilai,
                ]);
            }
        }

        return redirect()->route('nilai.create')->with('success', 'Nilai berhasil disimpan.');
    }

    public function clear()
    {
        Nilai::truncate();
        return redirect()->back()->with('success', 'Tabel berhasil dikosongkan.');
    }
}
