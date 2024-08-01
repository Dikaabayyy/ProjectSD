@extends('users.app')

@section('title', 'Visi dan Misi')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/profil.css')}}">
@endsection

@section('content')
<div class="profile-about" id="profile-about">

    <div id="header-profil">
        <div class="container">
            <h1>Visi dan Misi</h1>
        </div>
    </div>

    <div id="visimisi-items">
        <div class="container">

            @foreach ($visimisi as $vm)

                <div class="visi">
                    <h4>Visi Sekolah</h4>
                    <p>
                        {{ $vm->visi}}
                    </p>
                </div>

                <div class="misi">
                    <h4>Misi Sekolah</h4>
                    @foreach (explode("\n", $vm->misi) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>

            @endforeach

        </div>
    </div>


</div>
@endsection
