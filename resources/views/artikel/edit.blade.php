@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Artikel</div>
                    <div class="card-body">
                        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}">
                                <label class="form-label">Detail</label>
                                <input type="text" class="form-control" name="isi" value="{{ $artikel->isi }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{ asset('/images/artikel/' . $artikel->sampul) }}" width="100">
                                <input type="file" class="form-control" name="sampul">
                            </div>
                            <a href="{{ url('artikel') }}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
