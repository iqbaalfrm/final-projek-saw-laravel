@extends('kerangka.master')

@section('title', 'Penilaian Kriteria')
@section('content')
<div class="card shadow mb-4">
    <a href="#tambahkriteria" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="tambahkriteria">
        <h6 class="m-0 font-weight-bold text-primary">Penilaian Kriteria</h6>
    </a>
    <div class="collapse show" id="tambahkriteria">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <form action="{{ route('nilai.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered table-hover table-striped m-0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    @foreach ($kriterias as $kriteria)
                                        <th>{{ $kriteria->nama_kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatifs as $alternatif)
                                    <tr>
                                        <td>{{ $alternatif->nama_alternatif }}</td>
                                        @foreach ($kriterias as $kriteria)
                                            <td>
                                                <input type="number" class="form-control" name="nilai[{{ $alternatif->id }}][{{ $kriteria->id }}]" value="{{ old('nilai.'.$alternatif->id.'.'.$kriteria->id) }}">
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary mt-3">Simpan Nilai</button>
                    </form>
                    <form action="{{ route('nilai.clear') }}" method="POST" class="mt-2">
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3">Kosongkan Tabel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
