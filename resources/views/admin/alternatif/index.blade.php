@extends('kerangka.master')

@section('title', 'Daftar Alternatif')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <a href="#tambahalternatif" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="tambahalternatif">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Alternatif</h6>
            </a>
            <div class="collapse show" id="tambahalternatif">
                <div class="card-body">
                    @if (session()->has('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Info!</strong> {{ session()->get('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form action="{{ route('alternatif.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama_alternatif">Nama Alternatif</label>
                            <input type="text" class="form-control @error('nama_alternatif') is-invalid @enderror" id="nama_alternatif" name="nama_alternatif" value="{{ old('nama_alternatif') }}">
                            @error('nama_alternatif')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card shadow mb-4">
            <a href="#listalternatif" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="listalternatif">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Alternatif</h6>
            </a>
            <div class="collapse show" id="listalternatif">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped m-0" id="DataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatifs as $alternatif)
                                <tr>
                                    <td>{{ $alternatif->nama_alternatif }}</td>
                                    <td>
                                        <form action="{{ route('alternatif.destroy', $alternatif->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
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
    $(document).ready(function () {
        $('#DataTable').DataTable();
    });
</script>
@stop
