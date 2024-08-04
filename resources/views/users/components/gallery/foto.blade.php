@extends('users.app')

@section('title', 'Galeri Foto Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/gallery.css')}}">
@endsection

@section('content')
<div class="gallery-about" id="gallery-about">

    <div id="header-gallery">
        <div class="container">
            <h1>Galeri Foto SD YPKP 2 Sentani</h1>
        </div>
    </div>

    <div class="container">
        <div class="gallery-items">


            @foreach ($foto as $f)
                <!-- Modal -->
                <div class="modal fade" id="detailImage{{ $f->slug }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailImage{{ $f->slug }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 id="detailImage{{ $f->slug }}Label">{{ $f->name }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('storage/'. $f->img_name)}}">

                                @foreach (explode("\n", $f->desc) as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-image">
                    <img src="{{ asset('storage/'. $f->img_name)}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $f->name }}</h5>
                        <div class="btn-detail-gallery">
                            <button  class="btn-detail" data-bs-toggle="modal" data-bs-target="#detailImage{{ $f->slug }}">Lihat Detail Foto</button>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
</div>
@endsection
