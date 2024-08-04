@extends('admin.app')

@section('title', 'Data Siswa')

@section('content')
    <div class="pagetitle">
        <h1>Data Siswa SD YPKP 2 Sentani</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Siswa SD YPKP 2 Sentani</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="col" style="text-align: end; padding: 20px; padding-right: 40px;">
            <a type="button" href="/adm-tambah-data-siswa" class="btn btn-primary rounded-pill"><i class="bi bi-plus-circle"></i> Tambah Data Siswa</a>
        </div>

        <div class="data-siswa" style="display: flex; flex-wrap: wrap; flex-direction: row; justify-content: space-around;">

            <div class="card info-card sales-card" style="width: 320px;">

                <div class="card-body">
                  <h5 class="card-title">Data Siswa Kelas 1</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $students1 }}</h6>
                      <span class="text-muted small pt-2 ps-1">1A = {{ $students1a }}</span>, <span class="text-muted small pt-2 ps-1">1B = {{ $students1b }}</span>, <span class="text-muted small pt-2 ps-1">1C = {{ $students1c }}</span>

                    </div>
                  </div>
                  <div class="btn-detail">
                    <a href="/adm-data-siswa-kelas-1" class="detail-siswa">Lihat Data Siswa</a>
                  </div>
                </div>

            </div>

            <div class="card info-card sales-card" style="width: 320px;">

                <div class="card-body">
                  <h5 class="card-title">Data Siswa Kelas 2</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $students2 }}</h6>
                      <span class="text-muted small pt-2 ps-1">2A = {{ $students2a }}</span>, <span class="text-muted small pt-2 ps-1">2B = {{ $students2b }}</span>, <span class="text-muted small pt-2 ps-1">2C = {{ $students2c }}</span>

                    </div>
                  </div>
                  <div class="btn-detail">
                    <a href="/adm-data-siswa-kelas-2" class="detail-siswa">Lihat Data Siswa</a>
                  </div>
                </div>

            </div>

            <div class="card info-card sales-card" style="width: 320px;">

                <div class="card-body">
                  <h5 class="card-title">Data Siswa Kelas 3</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $students3 }}</h6>
                      <span class="text-muted small pt-2 ps-1">3A = {{ $students3a }}</span>, <span class="text-muted small pt-2 ps-1">3B = {{ $students3b }}</span>, <span class="text-muted small pt-2 ps-1">3C = {{ $students3c }}</span>

                    </div>
                  </div>
                  <div class="btn-detail">
                    <a href="/adm-data-siswa-kelas-3" class="detail-siswa">Lihat Data Siswa</a>
                  </div>
                </div>

            </div>

            <div class="card info-card sales-card" style="width: 320px;">

                <div class="card-body">
                  <h5 class="card-title">Data Siswa Kelas 4</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $students4 }}</h6>
                      <span class="text-muted small pt-2 ps-1">4A = {{ $students4a }}</span>, <span class="text-muted small pt-2 ps-1">4B = {{ $students4b }}</span>, <span class="text-muted small pt-2 ps-1">4C = {{ $students4c }}</span>

                    </div>
                  </div>
                  <div class="btn-detail">
                    <a href="/adm-data-siswa-kelas-4" class="detail-siswa">Lihat Data Siswa</a>
                  </div>
                </div>

            </div>

            <div class="card info-card sales-card" style="width: 320px;">

                <div class="card-body">
                  <h5 class="card-title">Data Siswa Kelas 5</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $students5 }}</h6>
                      <span class="text-muted small pt-2 ps-1">5A = {{ $students5a }}</span>, <span class="text-muted small pt-2 ps-1">5B = {{ $students5b }}</span>, <span class="text-muted small pt-2 ps-1">5C = {{ $students5c }}</span>

                    </div>
                  </div>
                  <div class="btn-detail">
                    <a href="/adm-data-siswa-kelas-5" class="detail-siswa">Lihat Data Siswa</a>
                  </div>
                </div>

            </div>

            <div class="card info-card sales-card" style="width: 320px;">

                <div class="card-body">
                  <h5 class="card-title">Data Siswa Kelas 6</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $students6 }}</h6>
                      <span class="text-muted small pt-2 ps-1">6A = {{ $students6a }}</span>, <span class="text-muted small pt-2 ps-1">6B = {{ $students6b }}</span>, <span class="text-muted small pt-2 ps-1">6C = {{ $students6c }}</span>

                    </div>
                  </div>
                  <div class="btn-detail">
                    <a href="/adm-data-siswa-kelas-6" class="detail-siswa">Lihat Data Siswa</a>
                  </div>
                </div>

            </div>

        </div>
    </section>

@endsection
