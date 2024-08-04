@extends('admin.app')

@section('title', 'Ubah Data Galeri Video')

@section('content')
    <div class="pagetitle">
      <h1>Ubah Data Galeri Video</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-galeri-video">Galeri Video</a></li>
          <li class="breadcrumb-item active">Ubah Data Video {{ $video->name }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">

                    <!-- Profile Edit Form -->
                    <form action="/adm-update-data-galeri-video-{{ $video->slug }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <input type="hidden" name="slug" value="{{ $video->slug }}">

                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Video</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="d-flex align-items-center ">
                                        <video width="450" style="margin-right: 10px; border-radius:3px;" controls>
                                            <source src="{{ asset('storage/'.$video->video_name) }}" type="video/mp4">
                                        </video>
                                        <video width="450" class="preview-video" id="preview-video" src="" style="display: none; border-radius:3px;" alt="Pratinjau Video" controls>
                                            <source src="#" type="video/mp4">
                                        </video>
                                        <input type="file" name="video" id="video" accept="video/*" onchange="previewVideo(event)">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Video</label>
                                <div class="col-md-8 col-lg-9">
                                <input name="name" type="text" class="form-control" id="name" value="{{ $video->name }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="desc" class="col-md-4 col-lg-3 col-form-label">Deskripsi Singkat Video</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea class="form-control" rows="12" style="resize: none" name="desc">{{ $video->desc }} </textarea>
                                </div>
                            </div>

                            <div class="text-center" id="options">
                                <button type="submit" class="btn btn-success" style="margin-right: 15px"><i class="bi bi-save"></i> Simpan</button>

                    </form><!-- End Profile Edit Form -->
                        <a type="button" href="/adm-galeri-video" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                </div>

              </div>
            </div>

      </section>

@endsection
