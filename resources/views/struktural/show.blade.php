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
                                    value="{{ $struktural->guru->nama_guru }}" disabled>
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan"
                                    value="{{ $struktural->jabatan->jabatan }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{ asset('/images/struktural/' . $struktural->sampul) }}" width="100" disabled>
                            </div>
                            <a href="{{ url('struktural') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
