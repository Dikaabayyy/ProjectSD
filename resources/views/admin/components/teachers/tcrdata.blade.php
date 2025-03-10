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

                        <div class="d-flex" id="searchbar">
                            <!-- Form Pencarian -->
                            <form action="{{ url()->current() }}" method="GET">
                                <input type="text" name="search" value="{{ $search }}" placeholder="Masukkan Nama Guru" >
                                <button type="submit"><i class="bi bi-search search-icon"></i> Cari Data</button>
                            </form>
                            <a type="button" href="/adm-data-guru" class=""><i class="bi bi-arrow-clockwise"></i> Reset</a>
                        </div>
                    </div>
                    <div class="col" id="ops">
                        <a type="button" href="/adm-tambah-data-guru" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data Guru</a>
                        <a type="button" href="/adm-data-guru-download-pdf" class="btn btn-success"><i class="bi bi-download"></i> Unduh Data</a>
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

                       @foreach ($teacher as $index => $t)
                            <!-- Delete Teacher Modal -->
                            <div class="modal fade" id="deltcrModal-{{ $t->slug }}" role="dialog" tabindex="-1" aria-labelledby="deltcrModalLabel-{{ $t->slug }}" aria-hidden="true" data-bs-backdrop="static">
                                <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deltcrModalLabel-{{ $t->slug }}">Perhatian!!!</h1>
                                        </div>

                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data ini?
                                        </div>

                                        <div class="modal-footer">
                                            <form action="/adm-hapus-data-guru-{{ $t->slug }}" method="POST">
                                                @csrf
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-danger">Hapus Data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <tr>
                                <th scope="row" class="nb">
                                    {{ $index +1 }}
                                </th>
                                <td class="pct">
                                    <img src="{{ asset('storage/'.$t->img_name) }}" alt="" class="img-tcr">
                                </td>
                                <td class="data">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <!-- Table with hoverable rows -->
                                            <table class="table table-hover table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 210px">Nama Lengkap</th>
                                                        <td>{{ $t->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">NIP</th>
                                                        <td>{{ $t->teachers_data->nip }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">NUPTK</th>
                                                        <td>{{ $t->teachers_data->nuptk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Golongan</th>
                                                        <td>{{ $t->teachers_data->gol }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Jenis Kelamin</th>
                                                        <td>{{ $t->gender }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tempat Lahir</th>
                                                        <td>{{ $t->birth_place }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Lahir</th>
                                                        <td>{{ $t->formatted_date_birth }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Jabatan</th>
                                                        <td>{{ $t->teachers_data->position }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Status</th>
                                                        <td>{{ $t->status }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Ijazah/Tahun Terakhir</th>
                                                        <td>{{ $t->teachers_data->ijazah }}/{{ $t->teachers_data->ijazah_date }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mulai diangkat/Mengajar</th>
                                                        <td>{{ $t->formatted_date_teaching }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Mulai Bekerja</th>
                                                        <td>{{ $t->formatted_date_working }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mapel Utama</th>
                                                        <td>{{ $t->teachers_data->subjects }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sertifikasi (Status/Tahun)</th>
                                                        <td>{{ $t->teachers_data->certificate_status }}/{{ $t->teachers_data->certificate_year }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                                <td class="opt" id="options">
                                    <a type="buton" href="/adm-edit-data-guru-{{ $t->slug }}" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i> Edit</a><br>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deltcrModal-{{ $t->slug }}"><i class="bi bi-trash"></i> Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>

          </div>

    </section>

@endsection
