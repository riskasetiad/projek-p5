@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Guru</div>

                    <div class="card-body">
                        <a href="{{ route('guru.create') }}" class="btn btn-primary">Tambah Data</a>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Guru</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">Sampul</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($guru as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_guru }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->mapel->mapel }}</td>
                                        <td>
                                            <img src="{{asset('/images/guru/' . $data->sampul)}}" width="100">
                                        </td>
                                       <form action="{{ route('guru.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('guru.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('guru.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
