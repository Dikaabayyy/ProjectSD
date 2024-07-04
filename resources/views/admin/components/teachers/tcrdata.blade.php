@extends('admin.app')

@section('title', 'Data Guru')

@section('content')
    <div class="pagetitle">
      <h1>Data Guru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Data Guru</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">Data Guru SD YPKP 2 SENTANI</h5>
                    </div>
                    <div class="col" style="text-align: end; padding-top: 20px;">
                        <a type="button" href="/adm-tambah-data-guru" class="btn btn-primary rounded-pill"><i class="bi bi-plus-circle"></i> Tambah Data Guru</a>
                        <button type="button" class="btn btn-success rounded-pill"><i class="bi bi-download"></i> Unduh Data</button>
                    </div>


                </div>
              <!-- Table with stripped rows -->
              <table class="table table-striped" id="tb-tcrdata">
                <thead>
                  <tr>
                    <th scope="col" class="nb">#</th>
                    <th scope="col" class="pct">Foto</th>
                    <th scope="col" class="data">Data Guru</th>
                    <th scope="col" class="opt">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="nb">1</th>
                    <td class="pct">
                        <img src="" alt="" class="img-tcr">
                    </td>
                    <td class="data">
                        <div class="card mb-0">
                            <div class="card-body">
                                <!-- Table with hoverable rows -->
                                <table class="table table-hover table-borderless mb-0">
                                    <tbody>
                                    <tr>
                                        <th scope="row" style="width: 210px">Nama Lengkap</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NIP</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NUPTK</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Golongan</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tempat Lahir</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Lahir</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabatan</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ijazah/Tahun Terakhir</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mulai diangkat/Mengajar</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Mulai Bekerja</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mapel Utama</th>
                                        <td>Brandon Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sertifikasi (Status/Tahun)</th>
                                        <td>Lulus/2023</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                    </td>
                    <td class="opt">
                        <a type="buton" href="/adm-edit-data-guru" class="btn btn-warning rounded-pill mb-3"><i class="bi bi-pencil-square"></i> Edit</a><br>
                        <button type="button" class="btn btn-danger rounded-pill"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>

          </div>

    </section>

@endsection
