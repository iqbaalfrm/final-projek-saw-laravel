@extends('layouts.app')

@section('title', 'Hasil')

@section('content')
    <div class="container">
        <h1>Masukan Data Penilaian :</h1>

        <form action="{{ route('hitung.process') }}" method="POST">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        @foreach($kriterias as $kriteria)
                            <th>{{ $kriteria->nama_kriteria }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($alternatif as $alternatif)
                        <tr>
                            <td>{{ $alternatifs->nama_alternatif }}</td>
                            @foreach($kriterias as $kriteria)
                                <td>
                                    <input type="number" step="0.01" name="nilai[{{ $alternatif->id_alternatif }}][{{ $kriteria->id_kriteria }}]" value="{{ $nilais[$alternatif->id_alternatif][$kriteria->id_kriteria] ?? '' }}" class="form-control">
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        <!-- Display results or process the form submission -->
    </div>
@endsection
