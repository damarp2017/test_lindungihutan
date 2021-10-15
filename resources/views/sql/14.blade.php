@extends('layouts.app')
@section('main')
<div class="container-fluid bg-light min-vh-100 ww-100">
    <div class="p-5">
        <div class="mb-3">
            <a href="{{ route('index') }}" class="text-decoration-none">
                <div class="text-center fw-bold fs-1">
                    Test SQL
                </div>
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="fs-6 text-primary">
                    Soal Nomor 14
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Film</th>
                            <th scope="col">Nama Artis</th>
                            <th scope="col">Negara</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nm_film }}</td>
                            <td>{{ $item->art->nm_artis }}</td>
                            <td>{{ $item->art->_negara->nm_negara }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection