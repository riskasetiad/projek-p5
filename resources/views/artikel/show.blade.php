@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Data Artikel</div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul"
                                    value="{{ $artikel->judul}}" disabled>
                                <label class="form-label">Detail</label>
                                <input type="text" class="form-control" name="isi"
                                    value="{{ $artikel->isi }}" disabled>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{asset('/images/artikel/' . $artikel->sampul)}}" width="100" disabled>
                            </div>
                            
                            <a href="{{ url('artikel') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
