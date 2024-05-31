@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Data Guru</div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Nama Guru</label>
                                <input type="text" class="form-control" name="nama_guru"
                                    value="{{ $guru->nama_guru}}" disabled>
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telepon"
                                    value="{{ $guru->telepon }}" disabled>
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email"
                                    value="{{ $guru->email }}" disabled>
                                <label class="form-label">ID Mata Pelajaran</label>
                                <input type="text" class="form-control" name="id_mapel"
                                    value="{{ $guru->mapel->mapel }}" disabled>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{asset('/images/guru/' . $guru->sampul)}}" width="100" disabled>
                            </div>
                            
                            <a href="{{ url('guru') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
