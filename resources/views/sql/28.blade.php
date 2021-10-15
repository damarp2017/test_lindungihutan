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
                    Soal Nomor 29
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Produser</th>
                            <th scope="col">Jumlah Film</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nm_produser }}</td>
                            <td>{{ $item->_film->count() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection