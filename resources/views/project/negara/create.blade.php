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
        <form action="{{ route('negara.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    Tambah Negara
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="kd_negara" class="form-label">Kode Negara</label>
                        <input type="text" class="form-control @error('kd_negara') is-invalid @enderror" id="kd_negara"
                            name="kd_negara" required value="{{ old('kd_negara') }}">
                        @error('kd_negara')
                        <div class="text-danger fs-sm">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nm_negara" class="form-label">Nama Negara</label>
                        <input type="text" class="form-control @error('nm_negara') is-invalid @enderror" id="nm_negara"
                            name="nm_negara" required value="{{ old('nm_negara') }}">
                        @error('nm_negara')
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