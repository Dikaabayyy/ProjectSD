@extends('users.app')

@section('title', 'Agenda Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/information.css')}}">
@endsection

@section('content')
<div class="information-about" id="information-about">

    <div id="header-information">
        <div class="container">
            <h1>Agenda SD YPKP 2 Sentani</h1>
        </div>
    </div>

    <div class="container">

        @foreach ($agendas as $a)

            <div class="agenda-detail">
                <div class="agenda-name">
                    <h5>{{ $a->name }}</h5>
                </div>
                <div class="agenda-date-desc">
                    <div class="agenda-date">
                        <div class="agenda-hours">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16"><path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/><path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/></svg>
                            {{ $a->formatted_date_start }}, {{ $a->formatted_time_start }} - {{ $a->formatted_date_end }}, {{ $a->formatted_time_end }}
                        </div>
                        <div class="agenda-loc">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/></svg>
                            {{ $a->location }}
                        </div>
                    </div>
                    <div class="agenda-desc">
                        <p>
                            {{ $a->desc }}
                        </p>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</div>
@endsection
