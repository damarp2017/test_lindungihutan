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
        <form action="{{ route('produser.update', $data->kd_produser) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    Edit Produser
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nm_produser" class="form-label">Nama Produser</label>
                        <input type="text" class="form-control @error('nm_produser') is-invalid @enderror"
                            id="nm_produser" name="nm_produser" required
                            value="{{ old('nm_produser', $data->nm_produser) }}">
                        @error('nm_produser')
                        <div class="text-danger fs-sm">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="international" class="form-label">International</label>
                        <select class="form-select" id="international" name="international" required>
                            <option selected>Pilih</option>
                            <option @if ($data->international == 'YA') selected @endif value="YA">YA</option>
                            <option @if ($data->international == 'TIDAK') selected @endif value="TIDAK">TIDAK</option>
                        </select>
                        @error('international')
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