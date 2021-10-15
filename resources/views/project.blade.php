@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endpush

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
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible mt-3" role="alert">
            <div>
                {{ $message }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="" style="width: 100%">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-negara-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-negara" type="button" role="tab" aria-controls="nav-negara"
                        aria-selected="true">Negara</button>
                    <button class="nav-link" id="nav-produser-tab" data-bs-toggle="tab" data-bs-target="#nav-produser"
                        type="button" role="tab" aria-controls="nav-produser" aria-selected="false">Produser</button>
                    <button class="nav-link" id="nav-genre-tab" data-bs-toggle="tab" data-bs-target="#nav-genre"
                        type="button" role="tab" aria-controls="nav-genre" aria-selected="false">Genre</button>
                    <button class="nav-link" id="nav-artis-tab" data-bs-toggle="tab" data-bs-target="#nav-artis"
                        type="button" role="tab" aria-controls="nav-artis" aria-selected="false">Artis</button>
                    <button class="nav-link" id="nav-film-tab" data-bs-toggle="tab" data-bs-target="#nav-film"
                        type="button" role="tab" aria-controls="nav-film" aria-selected="false">Film</button>
                    <button class="nav-link" id="nav-ajax-tab" data-bs-toggle="tab" data-bs-target="#nav-ajax"
                        type="button" role="tab" aria-controls="nav-ajax" aria-selected="false">AJAX</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-negara" role="tabpanel" aria-labelledby="nav-negara-tab">
                    <div class="card mt-2">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    Data Negara
                                </div>
                                <a href="{{ route('negara.create') }}"
                                    class="btn btn-sm btn-primary text-uppercase">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">KD Negara</th>
                                        <th scope="col">Nama Negara</th>
                                        <th scope="col" class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($countries as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->kd_negara }}</td>
                                        <td>{{ $item->nm_negara }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('negara.edit', $item->kd_negara) }}"
                                                class="btn btn-sm btn-warning text-uppercase">edit</a>
                                            <button type="button"
                                                onclick="showDeleteModal('{{ route('negara.destroy', $item->kd_negara) }}')"
                                                class="btn btn-sm btn-danger text-uppercase">hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-produser" role="tabpanel" aria-labelledby="nav-produser-tab">
                    <div class="card mt-2">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    Data Produser
                                </div>
                                <a href="{{ route('produser.create') }}"
                                    class="btn btn-sm btn-primary text-uppercase">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">KD Produser</th>
                                        <th scope="col">Nama Produser</th>
                                        <th scope="col">Internasional</th>
                                        <th scope="col" class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($producers as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->kd_produser }}</td>
                                        <td>{{ $item->nm_produser }}</td>
                                        <td>{{ $item->international }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('produser.edit', $item->kd_produser) }}"
                                                class="btn btn-sm btn-warning text-uppercase">edit</a>
                                            <button type="button"
                                                onclick="showDeleteModal('{{ route('produser.destroy', $item->kd_produser) }}')"
                                                class="btn btn-sm btn-danger text-uppercase">hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-genre" role="tabpanel" aria-labelledby="nav-genre-tab">
                    <div class="card mt-2">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    Data Genre
                                </div>
                                <a href="{{ route('genre.create') }}"
                                    class="btn btn-sm btn-primary text-uppercase">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">KD Genre</th>
                                        <th scope="col">Nama Genre</th>
                                        <th scope="col" class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($genres as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->kd_genre }}</td>
                                        <td>{{ $item->nm_genre }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('genre.edit', $item->kd_genre) }}"
                                                class="btn btn-sm btn-warning text-uppercase">edit</a>
                                            <button type="button"
                                                onclick="showDeleteModal('{{ route('genre.destroy', $item->kd_genre) }}')"
                                                class="btn btn-sm btn-danger text-uppercase">hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-artis" role="tabpanel" aria-labelledby="nav-artis-tab">
                    <div class="card mt-2">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    Data Artis
                                </div>
                                <a href="{{ route('artis.create') }}"
                                    class="btn btn-sm btn-primary text-uppercase">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">KD Artis</th>
                                        <th scope="col">Nama Artis</th>
                                        <th scope="col">JK</th>
                                        <th scope="col">Bayaran</th>
                                        <th scope="col">Award</th>
                                        <th scope="col">Negara</th>
                                        <th scope="col" class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actress as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->kd_artis }}</td>
                                        <td>{{ $item->nm_artis }}</td>
                                        <td>{{ $item->jk }}</td>
                                        <td>{{ $item->bayaran }}</td>
                                        <td>{{ $item->award }}</td>
                                        <td>{{ $item->_negara->nm_negara }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('artis.edit', $item->kd_artis) }}"
                                                class="btn btn-sm btn-warning text-uppercase">edit</a>
                                            <button type="button"
                                                onclick="showDeleteModal('{{ route('artis.destroy', $item->kd_artis) }}')"
                                                class="btn btn-sm btn-danger text-uppercase">hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-film" role="tabpanel" aria-labelledby="nav-film-tab">
                    <div class="card mt-2">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    Data Film
                                </div>
                                <a href="{{ route('film.create') }}"
                                    class="btn btn-sm btn-primary text-uppercase">Create</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">KD Film</th>
                                        <th scope="col">Nama Film</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Artis</th>
                                        <th scope="col">Produser</th>
                                        <th scope="col">Pendapatan</th>
                                        <th scope="col">Nominasi</th>
                                        <th scope="col" class="text-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($films as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->kd_film }}</td>
                                        <td>{{ $item->nm_film }}</td>
                                        <td>{{ $item->_genre->nm_genre }}</td>
                                        <td>{{ $item->art->nm_artis }}</td>
                                        <td>{{ $item->_produser->nm_produser }}</td>
                                        <td>{{ $item->pendapatan }}</td>
                                        <td>{{ $item->nominasi }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('film.edit', $item->kd_film) }}"
                                                class="btn btn-sm btn-warning text-uppercase">edit</a>
                                            <button type="button"
                                                onclick="showDeleteModal('{{ route('film.destroy', $item->kd_film) }}')"
                                                class="btn btn-sm btn-danger text-uppercase">hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ajax" role="tabpanel" aria-labelledby="nav-ajax-tab">
                    <div class="card mt-2">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    Data Film
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @csrf
                                <table id="editable" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">KD Film</th>
                                            <th scope="col">Nama Film</th>
                                            <th scope="col">Pendapatan</th>
                                            <th scope="col">Nominasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($films as $item)
                                        <tr>
                                            <td>{{ $item->kd_film }}</td>
                                            <td>{{ $item->nm_film }}</td>
                                            <td>{{ $item->pendapatan }}</td>
                                            <td>{{ $item->nominasi }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-wrapper"></div>
@endsection

@push('scripts')
<script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
<script>
    $(document).ready(function () { 
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $("input[name=_token]").val()
            }
        });
        $('#editable').Tabledit({
            url: '{{ route('film.action') }}',
            method: 'POST',
            dataType: "json",
            buttons: {
                edit: {
					class: 'btn btn-sm btn-secondary',
					html: '<span>Edit</span>',
					action: 'edit'
				},
            },
            columns: {
                identifier: [0, 'kd_film'],
                editable: [[1, 'nm_film'], [2, 'pendapatan'], [3, 'nominasi']]
            },
            onSuccess: function(data, textStatus, jqXHR) {
                console.log(data);
            },
        });
     });
    function showDeleteModal(url) {
        const modal = `
        <div class="modal fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title text-white">Peringatan</h4>
                    </div>
                    <form action="${url}" method="post">
                        @method('delete')
                        @csrf
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-outline-danger">Ya, saya yakin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        `;
        $('#modal-wrapper').html(modal);
        $('#modal-danger').modal('show');
    }
</script>
@endpush