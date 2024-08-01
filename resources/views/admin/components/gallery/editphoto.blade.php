@extends('admin.app')

@section('title', 'Ubah Data Galeri Foto')

@section('content')
    <div class="pagetitle">
      <h1>Ubah Data Galeri Foto</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-galeri-foto">Galeri Foto</a></li>
          <li class="breadcrumb-item active">Ubah Data Galeri Foto</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">

                    <!-- Profile Edit Form -->
                    <form action="/adm-update-data-galeri-foto-{{ $photo->slug }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <input type="hidden" name="slug" value="{{ $photo->slug }}">

                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ asset('storage/'.$photo->img_name) }}" class="prev-news" alt="">
                                        <img id="preview" class="preview prev-news" src="#" alt="Pratinjau Gambar" style="display: none;">
                                        <input type="file" name="image" id="image" accept="image/*" onchange="previewImage(event)">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Foto</label>
                                <div class="col-md-8 col-lg-9">
                                <input name="name" type="text" class="form-control" id="name" value="{{ $photo->name }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="desc" class="col-md-4 col-lg-3 col-form-label">Deskripsi Singkat Foto</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea class="form-control" rows="12" style="resize: none" name="desc">{{ $photo->desc }} </textarea>
                                </div>
                            </div>

                            <div class="text-center" id="options">
                                <button type="submit" class="btn btn-success" style="margin-right: 15px"><i class="bi bi-save"></i> Simpan</button>

                    </form><!-- End Profile Edit Form -->
                        <a type="button" href="/adm-galeri-foto" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                </div>

              </div>
            </div>

      </section>

@endsection
