@extends('users.app')

@section('title', 'Ekstrakurikuler Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/profil.css')}}">
@endsection

@section('content')
<div class="profile-about" id="profile-about">

    <div id="header-profil">
        <div class="container">
            <h1>Ekstrakurikuler SD YPKP 2 Sentani</h1>
        </div>
    </div>

    <div id="extra-items">
        <div class="container">

            @foreach ($extra as $e)
                <div class="extra">
                    <div class="extra-img">
                        <img src="{{ asset('storage/'.$e->img_name) }}" alt="">
                    </div>
                    <div class="extra-name">
                        <h5>{{ $e->name}}</h5>
                    </div>
                    <div class="extra-desc">
                        @foreach (explode("\n", $e->desc) as $paragraph)
                        <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>

                </div>
            @endforeach

        </div>
    </div>


</div>
@endsection
