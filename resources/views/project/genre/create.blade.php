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
        <form action="{{ route('genre.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    Tambah Genre
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nm_genre" class="form-label">Nama Genre</label>
                        <input type="text" class="form-control @error('nm_genre') is-invalid @enderror" id="nm_genre"
                            name="nm_genre" required value="{{ old('nm_genre') }}">
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