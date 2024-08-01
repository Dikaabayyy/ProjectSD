@extends('users.app')

@section('title', 'Kegiatan Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/profil.css')}}">
@endsection

@section('content')
<div class="profile-about" id="profile-about">

    <div id="header-profil">
        <div class="container">
            <h1>Kegiatan SD YPKP 2 Sentani</h1>
        </div>
    </div>

    <div id="activity-items">
        <div class="container">

            @foreach ($activity as $a)
                <div class="activity">
                    <div class="activity-img">
                        <img src="{{ asset('storage/'.$a->img_name) }}" alt="">
                    </div>
                    <div class="activity-name">
                        <h5>{{ $a->name}}</h5>
                    </div>
                    <div class="activity-desc">
                        @foreach (explode("\n", $a->desc) as $paragraph)
                        <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>

                </div>
            @endforeach

        </div>
    </div>


</div>
@endsection
