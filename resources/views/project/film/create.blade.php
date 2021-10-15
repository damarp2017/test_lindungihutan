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
        <form action="{{ route('film.store') }}" method="post" novalidate>
            @csrf
            <div class="card">
                <div class="card-header">
                    Tambah Film
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nm_film" class="form-label">Nama Film</label>
                        <input type="text" class="form-control @error('nm_film') is-invalid @enderror" id="nm_film"
                            name="nm_film" required value="{{ old('nm_film') }}">
                        @error('nm_film')
                        <div class="text-danger fs-sm">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-select" id="genre" name="genre" required>
                            <option selected>Pilih</option>
                            @foreach ($genres as $item)
                            <option @if (old('genre')==$item->kd_genre) selected @endif value="{{ $item->kd_genre
                                }}">{{ $item->nm_genre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="artis" class="form-label">Artis</label>
                        <select class="form-select" id="artis" name="artis" required>
                            <option selected>Pilih</option>
                            @foreach ($actress as $item)
                            <option @if (old('artis')==$item->kd_artis) selected @endif value="{{ $item->kd_artis
                                }}">{{ $item->nm_artis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="produser" class="form-label">Produser</label>
                        <select class="form-select" id="produser" name="produser" required>
                            <option selected>Pilih</option>
                            @foreach ($produsers as $item)
                            <option @if (old('produser')==$item->kd_produser) selected @endif value="{{
                                $item->kd_produser
                                }}">{{ $item->nm_produser }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pendapatan" class="form-label">Pendapatan</label>
                        <input type="number" class="form-control @error('pendapatan') is-invalid @enderror"
                            id="pendapatan" name="pendapatan" required value="{{ old('pendapatan') }}">
                        @error('pendapatan')
                        <div class="text-danger fs-sm">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nominasi" class="form-label">Nominasi</label>
                        <input type="number" class="form-control @error('nominasi') is-invalid @enderror" id="nominasi"
                            name="nominasi" required value="{{ old('nominasi') }}">
                        @error('nominasi')
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