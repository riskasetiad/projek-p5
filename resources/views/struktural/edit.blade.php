@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Struktural</div>
                    <div class="card-body">
                        <form action="{{ route('struktural.update', $struktural->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama guru</label>
                                <select class="form-control" name="id_guru">
                                    @foreach ($guru as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_guru }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Jabatan</label>
                                <select class="form-control" name="id_jabatan">
                                    @foreach ($jabatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->jabatan }}</option>
                                    @endforeach
                                </select>                                                        
                            </div> 
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{ asset('/images/struktural/' . $struktural->sampul) }}" width="100">
                                <input type="file" class="form-control" name="sampul">
                            </div> 
                            <a href="{{ url('struktural') }}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
