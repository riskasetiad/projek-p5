@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Jabatan</div>
                    <div class="card-body">
                        <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan"
                                    value="{{ $jabatan->jabatan }}">

                            </div>
                            <a href="{{ url('jabatan') }}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
