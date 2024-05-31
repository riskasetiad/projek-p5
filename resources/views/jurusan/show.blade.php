@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Data Jurusan</div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan"
                                    value="{{ $jurusan->nama_jurusan }}" disabled>
                                <label class="form-label">Kepala Program</label>
                                <input type="text" class="form-control" name="kaprog" value="{{ $jurusan->kaprog }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{asset('/images/jurusan/' . $jurusan->sampul)}}" width="100" disabled>
                            </div>
                            <a href="{{ url('jurusan') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
