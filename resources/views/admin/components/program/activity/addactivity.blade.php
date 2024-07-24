@extends('admin.app')

@section('title', 'Tambah Data Kegiatan')

@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Kegiatan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-kegiatan-sekolah">Kegiatan Sekolah</a></li>
          <li class="breadcrumb-item active">Tambah Data Kegiatan Sekolah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">

                    <!-- Profile Edit Form -->
                    <form action="/adm-simpan-data-kegiatan" enctype="multipart/form-data" method="POST">
                        @csrf

                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Kegiatan Sekolah</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="{{ asset('css/admin/asset/img/profile-img.jpg') }}" alt="Profile">
                          <div class="pt-2" id="ops" style="text-align: start;">
                            <a href="#" class="btn btn-primary btn-sm" style="margin-right: 10px" title="Upload new profile image"><i class="bi bi-upload"></i> Upload Foto</a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i> Hapus Foto</a>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Kegiatan Sekolah</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="name">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="desc" class="col-md-4 col-lg-3 col-form-label">Deskripsi Singkat Kegiatan Sekolah</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea class="form-control" rows="12" style="resize: none" name="desc"> </textarea>
                        </div>
                      </div>

                      <div class="text-center" id="options">
                        <button type="submit" class="btn btn-success" style="margin-right: 15px"><i class="bi bi-save"></i> Simpan</button>
                    </form><!-- End Profile Edit Form -->
                        <a type="button" href="/adm-kegiatan-sekolah" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                </div>

              </div>
            </div>

      </section>

@endsection
