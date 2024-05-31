@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Artikel</div>
                    <div class="card-body">
                        <form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul">
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
