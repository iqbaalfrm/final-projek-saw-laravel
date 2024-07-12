@extends('kerangka.master')
@section('title', 'Hasil Perhitungan')
@section('content')

<div class="card mb-3">
    <div class="card-header">
        Data Penilaian Alternatif
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    @foreach ($kriterias as $kriteriaId => $atribut)
                        <th>{{ $kriteriaId }} ({{ $atribut }})</th> 
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($nilais as $alternatifId => $nilaiAlternatif)
                    <tr>
                        <td>{{ $alternatifId }}</td>
                        <td>{{ $alternatifs[$alternatifId] }}</td> 
                        @foreach ($nilaiAlternatif as $kriteriaId => $nilai)
                            <td>{{ $nilai->nilai }}</td> 
                        @endforeach
                    </tr>
                @endforeach

                {{-- ... (Rows for Min and Max remain the same) ... --}}
            </tbody>
        </table>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        Normalisasi
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr>
                    <th>Id</th>
                    @foreach ($kriterias as $kriteriaId => $atribut)
                        <th>{{ $kriteriaId }}</th> 
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($normal as $alternatifId => $nilaiAlternatif)
                    <tr>
                        <td>{{ $alternatifId }}</td>
                        @foreach ($nilaiAlternatif as $kriteriaId => $nilaiNormal)
                            <td>{{ round($nilaiNormal, 4) }}</td> 
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="card mb-3">
    <div class="card-header">
        Perangkingan
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rank as $alternatifId => $peringkat)
                    <tr>
                        <td>{{ $peringkat }}</td>
                        <td>{{ $alternatifId }}</td>
                        <td>{{ $alternatifs[$alternatifId] }}</td>
                        <td>{{ round($total[$alternatifId], 4) }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
