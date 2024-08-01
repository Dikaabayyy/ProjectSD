@extends('admin.app')

@section('title', 'Ubah Data Prestasi')

@section('content')
    <div class="pagetitle">
      <h1>Ubah Data Prestasi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-prestasi-sekolah">Prestasi</a></li>
          <li class="breadcrumb-item active">Ubah Data Prestasi {{ $performance->name }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">


                  <!-- Profile Edit Form -->
                    <form action="/adm-update-data-prestasi-{{ $performance->slug }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <input type="text" name="slug" hidden value="{{ $performance->slug }}">
                        <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Prestasi</label>
                            <div class="col-md-8 col-lg-9">
                                <div class="d-flex align-items-center ">
                                    <img src="{{ asset('storage/'.$performance->img_name) }}" class="prev-news" alt="">
                                    <img id="preview" class="preview prev-news" src="#" alt="Pratinjau Gambar" style="display: none;">
                                    <input type="file" name="image" id="image" accept="image/*" onchange="previewImage(event)">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Prestasi</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="name" type="text" class="form-control" id="name" value="{{ $performance->name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Tingkat</label>
                            <div class="col-md-8 col-lg-9">
                                <select class="form-select" name="level" aria-label="Default select example">
                                    <option selected value="{{ $performance->level }}">{{ $performance->level }}</option>
                                    <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                    <option value="Provinsi">Provinsi</option>
                                    <option value="Nasional">Nasional</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-lg-3 col-form-label">Lokasi</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="location" type="text" class="form-control" id="location" value="{{ $performance->location }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="performance_date" class="col-md-4 col-lg-3 col-form-label">Tahun</label>
                            <div class="col-md-8 col-lg-9">
                            <input name="performance_date" type="text" class="form-control" id="performance_date" value="{{ $performance->performance_date }}" onkeypress="return isNumberKey(event)">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="desc" class="col-md-4 col-lg-3 col-form-label">Deskripsi Singkat Prestasi</label>
                            <div class="col-md-8 col-lg-9">
                                <textarea class="form-control" rows="12" style="resize: none" name="desc">{{ $performance->desc }} </textarea>
                            </div>
                        </div>

                        <div class="text-center" id="options">
                            <button type="submit" class="btn btn-success" style="margin-right: 15px"><i class="bi bi-save"></i> Simpan</button>
                        </form><!-- End Profile Edit Form -->
                        <a type="button" href="/adm-prestasi-sekolah" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                    </div>
              </div>
            </div>

      </section>

@endsection
