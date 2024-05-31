@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Guru</div>
                    <div class="card-body">
                        <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Guru</label>
                                <input type="text" class="form-control" name="nama_guru">
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telepon">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email">
                                <label class="form-label">Mata Pelajaran</label>
                                <select class="form-control" name="id_mapel">
                                    @foreach ($mapel as $data)
                                        <option value="{{ $data->id }}">{{ $data->mapel }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <input type="file" class="form-control" name="sampul">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
