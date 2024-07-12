@extends('kerangka.master')

@section('title', 'Edit ' . $kriteria->nama_kriteria)

@section('css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <a href="#editkriteria" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="editkriteria">
                <h6 class="m-0 font-weight-bold text-primary">Edit Kriteria</h6>
            </a>
            <div class="collapse show" id="editkriteria">
                <div class="card-body">
                    @if (session()->has('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Info!</strong> {{ session()->get('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form action="{{ route('kriteria.update', $kriteria->id_kriteria) }}" method="POST">
    @csrf
    @method('PATCH')
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Kriteria</label>
                            <input type="text" class="form-control @error('nama_kriteria') is-invalid @enderror"
                                id="nama_kriteria" name="nama_kriteria" value="{{ $kriteria->nama_kriteria }}">
                            @error('nama_kriteria')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="attribut">Attribut</label>
                            <select class="form-control @error('attribut') is-invalid @enderror" id="attribut"
                                name="attribut">
                                <option value="benefit" {{ $kriteria->attribut == 'benefit' ? 'selected' : '' }}>
                                    Benefit
                                </option>
                                <option value="cost" {{ $kriteria->attribut == 'cost' ? 'selected' : '' }}>Cost</option>
                            </select>
                            @error('attribut')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot</label>
                            <input type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot"
                                name="bobot" value="{{ $kriteria->bobot }}">
                            @error('bobot')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#DataTable').DataTable();
        })
    </script>
@stop
