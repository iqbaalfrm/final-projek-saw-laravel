@extends('kerangka.master')
@section('title', 'Dashboard')
@section('content')
<div class="page-content"> 
    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Jumlah Kriteria</h6>
                                    <h6 class="font-extrabold mb-0"></h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card"> 
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <small class="text-muted font-semibold">Jumlah Alternatif</small>
<h6 class="font-extrabold mb-0"></h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Jumlah Crips</h6>
                                    <h6 class="font-extrabold mb-0"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Jumlah User</h6>
                                    <h6 class="font-extrabold mb-0"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card besar untuk deskripsi website -->
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Deskripsi Website</h5>
                            <p class="card-text">
                                Website ini merupakan platform yang didedikasikan untuk mendukung keputusan dalam pemilihan guru di SMK Asy Syamsuriyyah menggunakan Metode Simple Additive Weighting (SAW).<br>
                                <br>
                                Metode SAW memungkinkan evaluasi terstruktur terhadap calon guru berdasarkan kriteria-kriteria yang telah ditentukan sebelumnya, seperti pengalaman mengajar, pendidikan, keterampilan tambahan, dan lain-lain.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan baris lain di sini jika diperlukan -->
        </div>
    </section>
</div>
@endsection

