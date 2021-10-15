@extends('layouts.app')

@section('main')
<div class="container-fluid bg-light min-vh-100 ww-100">
    <div class="p-5">
        <div class="mb-3">
            <a href="{{ route('project') }}" class="text-decoration-none">
                <div class="text-center fw-bold fs-1">
                    Test Project
                </div>
            </a>
        </div>
        <form action="{{ route('genre.update', $data->kd_genre) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    Edit Genre
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nm_genre" class="form-label">Nama Negara</label>
                        <input type="text" class="form-control @error('nm_genre') is-invalid @enderror" id="nm_genre"
                            name="nm_genre" required value="{{ old('nm_genre', $data->nm_genre) }}">
                        @error('nm_genre')
                        <div class="text-danger fs-sm">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary text-uppercase">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection