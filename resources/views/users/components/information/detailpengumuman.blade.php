@extends('users.app')

@section('title', 'Pengumuman Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/information.css')}}">
@endsection

@section('content')
<div class="information-about" id="information-about">
    @foreach ($pengumuman as $p)

    <div id="header-information">
        <div class="container">

            <h1>{{ $p->name }}</h1>
        </div>
    </div>

    <div class="container">

        <div id="details-news">
            <div class="details-news-img">
                <img src="{{ asset('storage/'.$p->img_name) }}" alt="">
            </div>
            <div class="details-news-items">
                <span>{{ $p->formatted_date }}</span>
                <p>
                    @foreach (explode("\n", $p->desc) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </p>
            </div>
        </div>

    </div>
    @endforeach
</div>
@endsection
