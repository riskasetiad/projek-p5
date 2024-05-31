@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Jurusan</div>
                    <div class="card-body">
                        <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan">
                                <label class="form-label">Kepala Program</label>
                                <input type="text" class="form-control" name="kaprog">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <input type="file" class="form-control" name="sampul">
                            </div>
                            <a href="{{ url('jurusan') }}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
