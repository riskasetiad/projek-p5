@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Ekstrakurikuler</div>

                    <div class="card-body">
                        <a href="{{ route('eskul.create') }}" class="btn btn-primary">Tambah Data</a>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Ekstrakurikuler</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Sampul</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($eskul as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_eskul }}</td>
                                        <td>{{ $data->isi }}</td>
                                        <td>
                                            <img src="{{ asset('/images/eskul/' . $data->sampul) }}" width="100">
                                        </td>
                                        <form action="{{ route('eskul.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('eskul.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('eskul.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                    class="btn btn-danger">Delete</button>
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
