@extends('users.app')

@section('title', 'Sambutan dari Kepala Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/profil.css')}}">
@endsection

@section('content')
<div class="profile-about" id="profile-about">

    <div id="header-profil">
        <div class="container">
            <h1>Sambutan Kepala Sekolah</h1>
        </div>
    </div>

    <div id="greets-items">
        <div class="container">

            @foreach ($greets as $g)

                <h4>{{ $g->name}}</h4>
                <div class="greets">

                    @foreach (explode("\n", $g->greets) as $paragraph)
                    <p>{{ $paragraph }}</p>
                    @endforeach
                </div>

            @endforeach

        </div>
    </div>


</div>
@endsection
