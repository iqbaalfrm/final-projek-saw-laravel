@extends('kerangka.master')
@section('title', $kriteria->nama_kriteria)
@section('css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <a href="#tambahcrips" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="tambahcrips">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Crips</h6>
            </a>
            <div class="collapse show" id="tambahcrips">
                <div class="card-body">
                    @if (session()->has('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Info!</strong> {{ session()->get('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form action="{{ route('crips.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama_crips">Nama Crips</label>
                            <input type="text" class="form-control @error('nama_crips') is-invalid @enderror"
                                id="nama_crips" name="nama_crips" value="{{ old('nama_crips') }}">
                            @error('nama_crips')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot</label>
                            <input type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot"
                                name="bobot" value="{{ old('bobot') }}">
                            @error('bobot')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="hidden" name="kriteria_id" value="{{ $kriteria->id }}">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card shadow mb-4">
            <a href="#listkriteria" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="listkriteria">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Crips</h6>
            </a>
            <div class="collapse show" id="listkriteria">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="DataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Crips</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($crips as $crip)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $crip->nama_crips }}</td>
                                    <td>{{ $crip->bobot }}</td>
                                    <td>
                                        </a>
                                        <a href="{{ route('crips.edit', $crip->id) }}"
                                            class="btn btn-sm btn-warning btn-round">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-danger hapus btn-round"
                                            data-id="{{ $crip->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
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
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#DataTable').DataTable();
    });
</script>
@stop
