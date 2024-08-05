@extends('users.app')

@section('title', 'Pengumuman Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/information.css')}}">
@endsection

@section('content')
<div class="information-about" id="information-about">

    <div id="header-information">
        <div class="container">
            <h1>Pengumuman SD YPKP 2 Sentani</h1>
        </div>
    </div>

    <div class="container">


        @foreach ($announ as $a)


        <div id="all-announ">
            <div class="announ-img">
                <img src="{{ asset('storage/'.$a->img_name) }}" alt="">
            </div>
            <div class="announ-items">
                <h5>{{ $a->name }}</h5>
                <span>{{ $a->formatted_date }}</span>
                <p>
                    {{ $a->desc }}
                </p>
                <div class="announ-detail">
                    <a href="/detail-pengumuman-{{ $a->slug }}">Baca Selengkapnya ...</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>
@endsection
