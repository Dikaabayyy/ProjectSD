@extends('admin.app')

@section('title', 'Tambah Data Siswa')

@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Siswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-data-siswa">Data Siswa</a></li>
          <li class="breadcrumb-item active">Tambah Data Siswa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">

                    <!-- Profile Edit Form -->
                    <form action="/adm-store-data-siswa" enctype="multipart/form-data" method="POST">
                        @csrf

                      <div class="row mb-3">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="inputname">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="nis/nisn" class="col-md-4 col-lg-3 col-form-label">NIS/NISN</label>
                        <div class="col-md-8 col-lg-9">
                            <div class="row">
                                <div class="col">
                                    <input name="nis" type="text" class="form-control" id="nis" placeholder="NIS" oninput="validateNumberInput(this)">
                                </div>
                                <div class="col-1" style="display: flex; justify-content:center; align-items: center;">
                                    <h4 style="margin: 0px">/</h4>
                                </div>
                                <div class="col">
                                    <input name="nisn" type="text" class="form-control" id="nisn" placeholder="NISN" oninput="validateNumberInput(this)">
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="gender" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-8 col-lg-9">
                            <select class="form-select form-control" name="gender" aria-label="Default select example">
                                <option selected> - </option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="birth_place" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="birth_place" type="text" class="form-control" id="birth_place">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="birth_date" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="birth_date" type="date" class="form-control" id="birth_date">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Kelas</label>
                        <div class="col-md-8 col-lg-9">
                            <div class="row">
                                <div class="col">
                                    <select class="form-select form-control" name="class" aria-label="Default select example">
                                        <option selected> - </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select form-control" name="category" aria-label="Default select example">
                                        <option selected> - </option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-success rounded-pill" style="margin-right: 15px"><i class="bi bi-save"></i> Simpan</button>
                    </form><!-- End Profile Edit Form -->
                        <a type="button" href="/adm-data-siswa" class="btn btn-secondary rounded-pill"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                </div>

              </div>
            </div>

      </section>

@endsection
