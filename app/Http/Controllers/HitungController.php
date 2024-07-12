<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function index()
    {
        $title = 'Perhitungan';

        // Mengambil data kriteria, alternatif, dan nilai dengan struktur yang benar
        $kriterias = Kriteria::pluck('atribut', 'id')->all(); // Ambil 'atribut' dari model Kriteria
        $alternatifs = Alternatif::pluck('nama_alternatif', 'id')->all();
        $nilais = Nilai::all()->groupBy('alternatif_id')->map->keyBy('kriteria_id');

        // Menghitung nilai minimum dan maksimum untuk setiap kriteria
        $minmax = [];
        foreach ($nilais as $alternatifId => $nilaiAlternatif) {
            foreach ($nilaiAlternatif as $kriteriaId => $nilai) {
                $minmax[$kriteriaId]['min'] = min(array_merge(isset($minmax[$kriteriaId]['min']) ? [$minmax[$kriteriaId]['min']] : [], [$nilai->nilai]));
                $minmax[$kriteriaId]['max'] = max(array_merge(isset($minmax[$kriteriaId]['max']) ? [$minmax[$kriteriaId]['max']] : [], [$nilai->nilai]));
            }
        }

        // Normalisasi nilai dengan bobot
        $bobot = Kriteria::pluck('bobot', 'id')->all(); // Ambil 'bobot' dari model Kriteria
        $normal = [];
        foreach ($nilais as $alternatifId => $nilaiAlternatif) {
            foreach ($nilaiAlternatif as $kriteriaId => $nilai) {
                if (isset($kriterias[$kriteriaId])) { // Pastikan kriteria ada
                    // Pastikan $kriterias[$kriteriaId] adalah string sebelum strtolower
                    $atribut = is_string($kriterias[$kriteriaId]) ? strtolower($kriterias[$kriteriaId]) : '';
                    $normal[$alternatifId][$kriteriaId] = $atribut == 'benefit'
                        ? $bobot[$kriteriaId] * $nilai->nilai / $minmax[$kriteriaId]['max']
                        : $bobot[$kriteriaId] * $minmax[$kriteriaId]['min'] / $nilai->nilai;
                }
            }
        }

        // Menghitung total nilai normalisasi dengan bobot
        $total = [];
        foreach ($normal as $alternatifId => $nilaiAlternatif) {
            $total[$alternatifId] = array_sum($nilaiAlternatif);
        }

        // Pengurutan dan pemberian peringkat
        arsort($total);
        $rank = [];
        $no = 1;
        foreach ($total as $key => $val) {
            $rank[$key] = $no++;
        }

        return view('admin.hitung.index', compact('title', 'kriterias', 'alternatifs', 'nilais', 'minmax', 'normal', 'total', 'rank'));
    }
}
