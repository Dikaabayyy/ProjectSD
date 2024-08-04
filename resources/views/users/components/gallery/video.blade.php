@extends('users.app')

@section('title', 'Galeri Video Sekolah')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/gallery.css')}}">
@endsection

@section('content')
<div class="gallery-about" id="gallery-about">

    <div id="header-gallery">
        <div class="container">
            <h1>Galeri Video SD YPKP 2 Sentani</h1>
        </div>
    </div>

    <div class="container">
        <div class="gallery-items">


            @foreach ($video as $v)
                <!-- Modal -->
                <div class="modal fade" id="detailVideo{{ $v->slug }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailVideo{{ $v->slug }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 id="detailVideo{{ $v->slug }}Label">{{ $v->name }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <video width="100%" style="border-radius: 3px;" id="videoPlayer" controls>
                                    <source src="{{ asset('storage/'.$v->video_name) }}" style="margin: 0px; padding: 0px;" type="video/mp4">
                                </video>
                                @foreach (explode("\n", $v->desc) as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-image">
                    <video width="100%" style="border-radius: 3px;">
                        <source src="{{ asset('storage/'.$v->video_name) }}" style="" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">{{ $v->name }}</h5>
                        <div class="btn-detail-gallery">
                            <button  class="btn-detail" data-bs-toggle="modal" data-bs-target="#detailVideo{{ $v->slug }}">Lihat Detail Video</button>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
</div>
@endsection
