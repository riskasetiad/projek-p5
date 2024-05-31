@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Guru</div>
                    <div class="card-body">
                        <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Guru</label>
                                <input type="text" class="form-control" name="nama_guru"
                                    value="{{ $guru->nama_guru }}">
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telepon" value="{{ $guru->telepon }}">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email"
                                    value="{{ $guru->email }}">
                                <label class="form-label">Mata pelajaran</label>
                                <select class="form-control" name="id_mapel" value="{{ $guru->id_mapel }}">
                                    @foreach ($mapel as $data)
                                        <option value="{{ $data->id }}"{{$data->id == $guru->id_mapel ? 'selected' : ''}}>{{ $data->mapel }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{ asset('/images/guru/' . $guru->sampul) }}" width="100">
                                <input type="file" class="form-control" name="sampul">
                            </div>
                            <a href="{{ url('guru') }}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
