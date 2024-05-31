@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Jurusan</div>
                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan"
                                    value="{{ $jurusan->nama_jurusan }}">
                                <label class="form-label">Kepala Program</label>
                                <input type="text" class="form-control" name="kaprog" value="{{ $jurusan->kaprog }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{ asset('/images/jurusan/' . $jurusan->sampul) }}" width="100">
                                <input type="file" class="form-control" name="sampul">
                            </div>
                            <a href="{{ url('jurusan') }}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
