@extends('users.app')

@section('title', 'Tentang Kami')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/profil.css')}}">
@endsection

@section('content')
<div class="profile-about" id="profile-about">

    <div id="header-profil">
        <div class="container">
            <h1>Tentang Kami</h1>
        </div>
    </div>

    <div id="about-items">
        <div class="container">

            @foreach ($about as $a)


            <div class="about-img">
                <img src="img/main/profile/Home2.jpg" alt="">
            </div>
            <div class="about-name">
                <h4>{{ $a->name}}</h4>
            </div>
            <div class="about-desc">
                @foreach (explode("\n", $a->about) as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
            </div>

            @endforeach

        </div>
    </div>


</div>
@endsection
