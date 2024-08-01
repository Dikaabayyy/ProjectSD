@extends('users.app')

@section('title', 'Tujuan Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/profil.css')}}">
@endsection

@section('content')
<div class="profile-about" id="profile-about">

    <div id="header-profil">
        <div class="container">
            <h1>Tujuan Sekolah</h1>
        </div>
    </div>

    <div id="goals-items">
        <div class="container">

            @foreach ($goals as $g)

                <h4>{{ $g->name}}</h4>
                <div class="goals">

                    @foreach (explode("\n", $g->goals) as $paragraph)
                    <p>{{ $paragraph }}</p>
                    @endforeach
                </div>

            @endforeach

        </div>
    </div>


</div>
@endsection
