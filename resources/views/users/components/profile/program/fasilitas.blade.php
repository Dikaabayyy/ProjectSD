@extends('users.app')

@section('title', 'Fasilitas Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/profil.css')}}">
@endsection

@section('content')
<div class="profile-about" id="profile-about">

    <div id="header-profil">
        <div class="container">
            <h1>Fasilitas SD YPKP 2 Sentani</h1>
        </div>
    </div>

    <div id="facility-items">
        <div class="container">

            @foreach ($facility as $e)
                <div class="facility">
                    <div class="facility-img">
                        <img src="{{ asset('storage/'.$e->img_name) }}" alt="">
                    </div>
                    <div class="facility-name">
                        <h5>{{ $e->name}}</h5>
                    </div>
                    <div class="facility-desc">
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
