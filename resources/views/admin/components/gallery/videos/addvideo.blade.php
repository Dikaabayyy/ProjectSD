@extends('admin.app')

@section('title', 'Tambah Data Galeri Video')

@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Galeri Video</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-galeri-video">Galeri Video</a></li>
          <li class="breadcrumb-item active">Tambah Data Galeri Video</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">

                    <!-- Profile Edit Form -->
                    <form action="/adm-simpan-data-galeri-video" enctype="multipart/form-data" method="POST">
                        @csrf

                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">File Video</label>
                        <div class="col-md-8 col-lg-9">
                                <video width="450" class="preview-video" id="preview-video" src="" style="display: none; margin-bottom:10px; border-radius:3px;" alt="Pratinjau Video" controls>
                                    <source src="#" type="video/mp4">
                                </video>
                            <input type="file" name="video" id="video" accept="video/*" onchange="previewVideo(event)">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Video</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="name">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="desc" class="col-md-4 col-lg-3 col-form-label">Deskripsi Singkat Video</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea class="form-control" rows="12" style="resize: none" name="desc"> </textarea>
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
