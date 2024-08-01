@extends('admin.app')

@section('title', 'Tambah Data Agenda')

@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Agenda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-agenda-sekolah">Agenda</a></li>
          <li class="breadcrumb-item active">Tambah Data Agenda</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">

                    <!-- Profile Edit Form -->
                    <form action="/adm-simpan-data-agenda" enctype="multipart/form-data" method="POST">
                        @csrf

                      <div class="row mb-3">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Agenda</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="name">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="desc" class="col-md-4 col-lg-3 col-form-label">Deskripsi Agenda</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea class="form-control" rows="12" style="resize: none" name="desc"> </textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="location" class="col-md-4 col-lg-3 col-form-label">Lokasi Agenda</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="location" type="text" class="form-control" id="location">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="agenda_start" class="col-md-4 col-lg-3 col-form-label">Tanggal Mulai Agenda</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="agenda_start" type="datetime-local" class="form-control" id="agenda-start" style="width: 200px;">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="agenda_end" class="col-md-4 col-lg-3 col-form-label">Tanggal Agenda Berakhir</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="agenda_end" type="datetime-local" class="form-control" id="agenda_end" style="width: 200px;">
                        </div>
                      </div>

                      <div class="text-center" id="options">
                        <button type="submit" class="btn btn-success" style="margin-right: 15px"><i class="bi bi-save"></i> Simpan</button>
                    </form><!-- End Profile Edit Form -->
                        <a type="button" href="/adm-agenda-sekolah" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                </div>

              </div>
            </div>

      </section>

@endsection
