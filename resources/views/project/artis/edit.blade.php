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
        <form action="{{ route('artis.update', $data->kd_artis) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    Edit Artis
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nm_artis" class="form-label">Nama Artis</label>
                        <input type="text" class="form-control @error('nm_artis') is-invalid @enderror" id="nm_artis"
                            name="nm_artis" required value="{{ old('nm_artis', $data->nm_artis) }}">
                        @error('nm_artis')
                        <div class="text-danger fs-sm">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="bayaran" class="form-label">Bayaran</label>
                        <input type="number" class="form-control @error('bayaran') is-invalid @enderror" id="bayaran"
                            name="bayaran" required value="{{ old('bayaran', $data->bayaran) }}">
                        @error('bayaran')
                        <div class="text-danger fs-sm">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="award" class="form-label">Award</label>
                        <input type="number" class="form-control @error('award') is-invalid @enderror" id="award"
                            name="award" required value="{{ old('award', $data->award) }}">
                        @error('award')
                        <div class="text-danger fs-sm">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="jk" name="jk" required>
                            <option selected>Pilih</option>
                            <option @if (old('jk', $data->jk) == 'PRIA') selected @endif value="PRIA">PRIA</option>
                            <option @if (old('jk', $data->jk) == 'WANITA') selected @endif value="WANITA">WANITA
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="negara" class="form-label">Negara</label>
                        <select class="form-select" id="negara" name="negara" required>
                            <option selected>Pilih</option>
                            @foreach ($countries as $item)
                            <option @if (old('negara', $data->negara)==$item->kd_negara) selected @endif value="{{
                                $item->kd_negara
                                }}">{{ $item->nm_negara }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary text-uppercase">Submit</button>
                </div>
            </div>
    </div>
    </form>
</div>
</div>
@endsection