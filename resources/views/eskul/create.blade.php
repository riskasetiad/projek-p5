@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Ekstrakurikuler</div>
                    <div class="card-body">
                        <form action="{{ route('eskul.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Ekstrakurikuler</label>
                                <input type="text" class="form-control" name="nama_eskul">
                                <label class="form-label">Detail</label>
                                <input type="text" class="form-control" name="isi">
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
