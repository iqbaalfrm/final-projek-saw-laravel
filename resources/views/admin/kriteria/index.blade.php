@extends('kerangka.master')
@section('title', 'Daftar Kriteria')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <a href="#tambahkriteria" class="d-block card-header py-3" data-toggle="collapse" role="button"
               aria-expanded="true" aria-controls="tambahkriteria">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
            </a>
            <div class="collapse show" id="tambahkriteria">
                <div class="card-body">
                    <form action="{{ route('kriteria.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Kriteria</label>
                            <input type="text" class="form-control @error('nama_kriteria') is-invalid @enderror" id="nama_kriteria" name="nama_kriteria" value="{{ old('nama_kriteria') }}">
                            @error('nama_kriteria')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="atribut">Atribut</label>
                            <select class="form-control @error('atribut') is-invalid @enderror" id="atribut" name="atribut">
                                <option value="benefit" {{ old('atribut') == 'benefit' ? 'selected' : '' }}>Benefit</option>
                                <option value="cost" {{ old('atribut') == 'cost' ? 'selected' : '' }}>Cost</option>
                            </select>
                            @error('atribut')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot</label>
                            <input type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot" name="bobot" value="{{ old('bobot') }}">
                            @error('bobot')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card shadow mb-4">
            <a href="#listkriteria" class="d-block card-header py-3" data-toggle="collapse" role="button"
               aria-expanded="true" aria-controls="listkriteria">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Kriteria</h6>
            </a>
            <div class="collapse show" id="listkriteria">
                <div class="card-body">
                    <form action="{{ route('kriteria.destroy.all') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus semua kriteria?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger float-right mb-3">Hapus Semua Kriteria</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped m-0" id="DataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Atribut</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriterias as $kriteria)
                                    <tr>
                                        <td>{{ $kriteria->nama_kriteria }}</td>
                                        <td>{{ $kriteria->atribut }}</td>
                                        <td>{{ $kriteria->bobot }}</td>
                                        <td>
                                            <a href="{{ route('kriteria.edit', $kriteria->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('kriteria.destroy', $kriteria->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kriteria ini?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<!-- Page level plugins -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#DataTable').DataTable();
    });
</script>
@stop
