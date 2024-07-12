<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $timestamp = Carbon::now();

        DB::table('tb_alternatif')->insert([
            [
                'id_alternatif' => 'A01',
                'nama_alternatif' => 'ozi saputra',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'id_alternatif' => 'A02',
                'nama_alternatif' => 'Iqbal Firmansyah',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'id_alternatif' => 'A03',
                'nama_alternatif' => 'indah permatasari',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'id_alternatif' => 'A04',
                'nama_alternatif' => 'budi gunadi',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'id_alternatif' => 'A05',
                'nama_alternatif' => 'rizki prasetyo',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
        ]);

        DB::table('tb_kriteria')->insert([
            [
                'id_kriteria' => 'C01',
                'nama_kriteria' => 'Kualifikasi Akademik',
                'atribut' => 'Benefit',
                'bobot' => 30,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'id_kriteria' => 'C02',
                'nama_kriteria' => 'Sertifikat Mengajar',
                'atribut' => 'Benefit',
                'bobot' => 25,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'id_kriteria' => 'C03',
                'nama_kriteria' => 'Pengalaman Mengajar',
                'atribut' => 'Benefit',
                'bobot' => 20,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'id_kriteria' => 'C04',
                'nama_kriteria' => 'Keahlian Khusus',
                'atribut' => 'Benefit',
                'bobot' => 15,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
            [
                'id_kriteria' => 'C05',
                'nama_kriteria' => 'Keahlian Penggunaan Teknologi',
                'atribut' => 'Benefit',
                'bobot' => 10,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
        ]);

        DB::table('tb_nilai')->insert([
            // Data nilai untuk 'ozi saputra',
            ['id_alternatif' => 'A01', 'id_kriteria' => 'C01', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A01', 'id_kriteria' => 'C02', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A01', 'id_kriteria' => 'C03', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A01', 'id_kriteria' => 'C04', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A01', 'id_kriteria' => 'C05', 'nilai' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],

            // Data nilai untuk 'Iqbal Firmansyah',
            ['id_alternatif' => 'A02', 'id_kriteria' => 'C01', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A02', 'id_kriteria' => 'C02', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A02', 'id_kriteria' => 'C03', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A02', 'id_kriteria' => 'C04', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A02', 'id_kriteria' => 'C05', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],

            // Data nilai untuk 'indah permatasari',
            ['id_alternatif' => 'A03', 'id_kriteria' => 'C01', 'nilai' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A03', 'id_kriteria' => 'C02', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A03', 'id_kriteria' => 'C03', 'nilai' => 4, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A03', 'id_kriteria' => 'C04', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A03', 'id_kriteria' => 'C05', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],

            // Data nilai untuk 'budi gunadi',
            ['id_alternatif' => 'A04', 'id_kriteria' => 'C01', 'nilai' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A04', 'id_kriteria' => 'C02', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A04', 'id_kriteria' => 'C03', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A04', 'id_kriteria' => 'C04', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A04', 'id_kriteria' => 'C05', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],

            // Data nilai untuk 'rizki prasetyo',
            ['id_alternatif' => 'A05', 'id_kriteria' => 'C01', 'nilai' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A05', 'id_kriteria' => 'C02', 'nilai' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A05', 'id_kriteria' => 'C03', 'nilai' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A05', 'id_kriteria' => 'C04', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],
            ['id_alternatif' => 'A05', 'id_kriteria' => 'C05', 'nilai' => 2, 'created_at' => $timestamp, 'updated_at' => $timestamp],
        ]);
    }
}
