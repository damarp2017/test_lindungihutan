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
                    *Note: Klik list untuk melihat detail jawaban.
                </div>
            </div>
            <div class="card-body">
                <ol class="list-group">
                    <a href="{{ route('sql.1') }}" class="list-group-item list-group-item-action">
                        1. Tampilkan nama film dan nominasi dari nominasi yang terbesar
                    </a>
                    <a href="{{ route('sql.2') }}" class="list-group-item list-group-item-action">
                        2. Tampilkan nama film dan nominasi yang paling banyak mendapatkan nominasi
                    </a>
                    <a href="{{ route('sql.3') }}" class="list-group-item list-group-item-action">
                        3. Tampilkan nama film dan nominasi yang tidak dapat nominasi
                    </a>
                    <a href="{{ route('sql.4') }}" class="list-group-item list-group-item-action">
                        4. Tampilkan nama film dan pendapatan urut dari yang terkecil
                    </a>
                    <a href="{{ route('sql.5') }}" class="list-group-item list-group-item-action">
                        5. Tampilkan nama film dan pendapatan yang terbesar
                    </a>
                    <a href="{{ route('sql.6') }}" class="list-group-item list-group-item-action">
                        6. Tampilkan rata2 pendapatan film keseluruhan
                    </a>
                    <a href="{{ route('sql.7') }}" class="list-group-item list-group-item-action">
                        7. Tampilkan nama film dan artis yang memiliki award terbanyak
                    </a>
                    <a href="{{ route('sql.8') }}" class="list-group-item list-group-item-action">
                        8. Tampilkan rata2 nominasi film keseluruhan
                    </a>
                    <a href="{{ route('sql.9') }}" class="list-group-item list-group-item-action">
                        9. Tampilkan nama film yang huruf depannya ‘i’
                    </a>
                    <a href="{{ route('sql.10') }}" class="list-group-item list-group-item-action">
                        10. Tampilkan nama film yang huruf terakhir ‘n’
                    </a>
                    <a href="{{ route('sql.11') }}" class="list-group-item list-group-item-action">
                        11. Tampilkan nama film yang mengandung huruf ‘c’
                    </a>
                    <a href="{{ route('sql.12') }}" class="list-group-item list-group-item-action">
                        12. Tampilkan nama film dengan pendapatan terbesar mengandung huruf ‘s’
                    </a>
                    <a href="{{ route('sql.13') }}" class="list-group-item list-group-item-action">
                        13. Tampilkan nama film yang artisnya berasal dari negara hongkong
                    </a>
                    <a href="{{ route('sql.14') }}" class="list-group-item list-group-item-action">
                        14. Tampilkan nama film yang artisnya bukan berasal dari negara yang tidak mengandung huruf
                        ‘o’
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        15. Tampilkan negara mana yang paling banyak filmnya
                    </a>
                    <a href="{{ route('sql.16') }}" class="list-group-item list-group-item-action">
                        16. Tampilkan data negara dengan jumlah filmnya
                    </a>
                    <a href="{{ route('sql.17') }}" class="list-group-item list-group-item-action">
                        17. Tampilkan nama film dengan artis bayaran terendah
                    </a>
                    <a href="{{ route('sql.18') }}" class="list-group-item list-group-item-action">
                        18. Tampilkan nama artis yang tidak pernah bermain film
                    </a>
                    <a href="{{ route('sql.19') }}" class="list-group-item list-group-item-action">
                        19. Tampilkan nama artis yang paling banyak bermain film
                    </a>
                    <a href="{{ route('sql.20') }}" class="list-group-item list-group-item-action">
                        20. Tampilkan nama artis yang bermain film dengan genre drama
                    </a>
                    <a href="{{ route('sql.21') }}" class="list-group-item list-group-item-action">
                        21. Tampilkan nama artis yang bermain film dengan genre horror
                    </a>
                    <a href="{{ route('sql.22') }}" class="list-group-item list-group-item-action">
                        22. Tampilkan produser yang tidak punya film
                    </a>
                    <a href="{{ route('sql.23') }}" class="list-group-item list-group-item-action">
                        23. Tampilkan produser film yang memiliki artis termahal
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        24. Tampilkan produser yang memiliki banyak artis
                    </a>
                    <a href="{{ route('sql.25') }}" class="list-group-item list-group-item-action">
                        25. Tampilkan nama film yang dibintangi oleh artis yang huruf depannya ‘j’
                    </a>
                    <a href="{{ route('sql.26') }}" class="list-group-item list-group-item-action">
                        26. Tampilkan nama produser yang berskala internasional
                    </a>
                    <a href="{{ route('sql.27') }}" class="list-group-item list-group-item-action">
                        27. Tampilkan berapa data produser berskala internasional
                    </a>
                    <a href="{{ route('sql.28') }}" class="list-group-item list-group-item-action">
                        28. Tampilkan jumlah film dari masing2 produser
                    </a>
                    <a href="{{ route('sql.29') }}" class="list-group-item list-group-item-action">
                        29. Tampilkan jumlah nominasi dari masing2 produser
                    </a>
                    <a href="{{ route('sql.30') }}" class="list-group-item list-group-item-action">
                        30. Tampilkan jumlah pendapatan produser marvel secara keseluruhan
                    </a>
                    <a href="{{ route('sql.31') }}" class="list-group-item list-group-item-action">
                        31. Tampilkan jumlah pendapatan produser yang skalanya tidak international
                    </a>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection