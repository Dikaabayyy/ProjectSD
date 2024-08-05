@extends('users.app')

@section('title', 'Berita Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/information.css')}}">
@endsection

@section('content')
<div class="information-about" id="information-about">

    <div id="header-information">
        <div class="container">
            <h1>Berita SD YPKP 2 Sentani</h1>
        </div>
    </div>

    <div class="container">


        @foreach ($news as $n)


        <div id="all-news">
            <div class="news-img">
                <img src="{{ asset('storage/'.$n->img_name) }}" alt="">
            </div>
            <div class="news-items">
                <h5>{{ $n->name }}</h5>
                <span>{{ $n->formatted_date }}</span>
                <p>
                    @foreach (explode("\n", $n->desc) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </p>
                <div class="news-detail">
                    <a href="/detail-berita-{{ $n->slug }}">Baca Selengkapnya ...</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>
@endsection
