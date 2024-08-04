@extends('admin.app')

@section('title', 'Tambah Data Guru')

@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Guru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-data-guru">Data Guru</a></li>
          <li class="breadcrumb-item active">Tambah Data Guru</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">

                    <!-- Profile Edit Form -->
                    <form action="/adm-store-data-guru" enctype="multipart/form-data" method="POST">
                        @csrf

                      <div class="row mb-5">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="name" on>
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="nip" class="col-md-4 col-lg-3 col-form-label">NIP</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nip" type="text" class="form-control" id="nip" oninput="validateNumberInput(this)">
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="nuptk" class="col-md-4 col-lg-3 col-form-label">NUPTK</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nuptk" type="text" class="form-control" id="nuptk" oninput="validateNumberInput(this)">
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Golongan</label>
                        <div class="col-md-8 col-lg-9">
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-select" name="golongan" aria-label="Default select example">
                                        <option selected>Pilih Golongan</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="kategori" aria-label="Default select example">
                                        <option selected>Pilih Kategori</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="gender" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-8 col-lg-9">
                            <select class="form-select" name="gender" aria-label="Default select example">
                                <option selected> - </option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="birth_place" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="birth_place" type="text" class="form-control" id="birth_place">
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="birth_date" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="birth_date" type="date" class="form-control" id="birth_date">
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="position" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="position" type="text" class="form-control" id="position">
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Status</label>
                        <div class="col-md-8 col-lg-9">
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option selected> - </option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                            </select>
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="ijazah" class="col-md-4 col-lg-3 col-form-label">Ijazah/Tahun Terakhir</label>
                        <div class="col-md-8 col-lg-9">
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-select" name="ijazah" aria-label="Default select example">
                                        <option selected> - </option>
                                        <option value="SMA/MA/SMK">SMA/MA/SMK</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input name="ijazah_date" type="text" class="form-control" id="yearInput" oninput="validateYearInput(this)" pattern="\d{4}">
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="start_up_teaching" class="col-md-4 col-lg-3 col-form-label">Mulai diangkat/Mengajar</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="start_up_teaching" type="date" class="form-control" id="start_up_teaching">
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="start_working" class="col-md-4 col-lg-3 col-form-label">Tanggal Mulai Bekerja</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="start_working" type="date" class="form-control" id="start_working">
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="subjects" class="col-md-4 col-lg-3 col-form-label">Mata Pelajaran Utama</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="subjects" type="text" class="form-control" id="subjects">
                        </div>
                      </div>

                      <div class="row mb-5">
                        <label for="certificate" class="col-md-4 col-lg-3 col-form-label">Sertifikasi (Status/Tahun)</label>
                        <div class="col-md-8 col-lg-9">
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-select" name="certificate_status" aria-label="Default select example">
                                        <option selected> - </option>
                                        <option value="Lulus">Lulus</option>
                                        <option value="Belum Lulus">Belum Lulus</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input name="certificate_year" type="text" class="form-control" id="yearInput" oninput="validateYearInput(this)" pattern="\d{4}">
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-success rounded-pill" style="margin-right: 15px"><i class="bi bi-save"></i> Simpan</button>
                    </form><!-- End Profile Edit Form -->
                        <a type="button" href="/adm-data-guru" class="btn btn-secondary rounded-pill"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                </div>

              </div>
            </div>

      </section>

@endsection
