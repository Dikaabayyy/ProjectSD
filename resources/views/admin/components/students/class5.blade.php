@extends('admin.app')

@section('title', 'Data Siswa Kelas 5')

@section('content')
    <div class="pagetitle">
      <h1>Data Siswa Kelas 5</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-data-siswa">Data Siswa</a></li>
          <li class="breadcrumb-item active">Data Siswa Kelas 5</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">Data Siswa Kelas 5 SD YPKP 2 SENTANI</h5>
                    </div>
                </div>
                <div >
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#class-5a">Kelas 5 A</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#class-5b">Kelas 5 B</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#class-5c">Kelas 5 C</button>
                        </li>
                      </ul>
                </div>

                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active class-5a pt-3" id="class-5a">
                        <div style="text-align: start; padding-bottom: 20px;">
                            <a type="button" href="/adm-data-siswa-download-{{ $sa->class }}-{{ $sa->category }}" class="btn btn-success"><i class="bi bi-download"></i> Unduh Data</a>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped" id="tb-tcrdata">
                            <thead>
                            <tr>
                                <th scope="col" class="nb">#</th>
                                <th scope="col" class="pct">Foto</th>
                                <th scope="col" class="data">Data Siswa</th>
                                <th scope="col" class="opt">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($students5a as $index => $a )
                                <!-- Delete Teacher Modal -->
                                <div class="modal fade" id="delstdModal-{{ $a->slug }}" role="dialog" tabindex="-1" aria-labelledby="delstdModalLabel-{{ $a->slug }}" aria-hidden="true" data-bs-backdrop="static">
                                    <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="delstdModalLabel-{{ $a->slug }}">Perhatian!!!</h1>
                                            </div>

                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini?
                                            </div>

                                            <div class="modal-footer">
                                                <form action="/adm-delete-data-siswa-{{ $a->slug }}" method="POST">
                                                    @csrf
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-danger">Hapus Data</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <tr>
                                    <th scope="row" class="nb">{{ $index + 1}}</th>
                                    <td class="pct">
                                        <img src="{{ asset('storage/'.$a->img_name) }}" alt="" class="img-tcr">
                                    </td>
                                    <td class="data">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- Table with hoverable rows -->
                                                <table class="table table-hover table-borderless mb-0">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 210px">Nama Lengkap</th>
                                                        <td>{{ $a->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">NIS/NISN</th>
                                                        <td>{{ $a->nis }} / {{ $a->nisn }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Jenis Kelamin</th>
                                                        <td>{{ $a->gender }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tempat Lahir</th>
                                                        <td>{{ $a->birth_place }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Lahir</th>
                                                        <td>{{ $a->birth_date }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kelas</th>
                                                        <td>{{ $a->class }} {{ $a->category }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!-- End Table with hoverable rows -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="opt" id="options">
                                        <a type="buton" href="/adm-edit-data-siswa-{{ $a->slug }}" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i> Edit</a><br>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delstdModal-{{ $a->slug }}"><i class="bi bi-trash"></i> Hapus</button>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>

                    <div class="tab-pane fade show class-5b pt-3" id="class-5b">
                        <div style="text-align: start; padding-bottom: 20px;">
                            <a type="button" href="/adm-data-siswa-download-{{ $sb->class }}-{{ $sb->category }}" class="btn btn-success"><i class="bi bi-download"></i> Unduh Data</a>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped" id="tb-tcrdata">
                            <thead>
                            <tr>
                                <th scope="col" class="nb">#</th>
                                <th scope="col" class="pct">Foto</th>
                                <th scope="col" class="data">Data Siswa</th>
                                <th scope="col" class="opt">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($students5b as $index => $b )
                                <!-- Delete Teacher Modal -->
                                <div class="modal fade" id="delstdModal-{{ $b->slug }}" role="dialog" tabindex="-1" aria-labelledby="delstdModalLabel-{{ $b->slug }}" aria-hidden="true" data-bs-backdrop="static">
                                    <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="delstdModalLabel-{{ $b->slug }}">Perhatian!!!</h1>
                                            </div>

                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini?
                                            </div>

                                            <div class="modal-footer">
                                                <form action="/adm-delete-data-siswa-{{ $b->slug }}" method="POST">
                                                    @csrf
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-danger">Hapus Data</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <tr>
                                    <th scope="row" class="nb">{{ $index + 1}}</th>
                                    <td class="pct">
                                        <img src="{{ asset('storage/'.$b->img_name) }}" alt="" class="img-tcr">
                                    </td>
                                    <td class="data">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- Table with hoverable rows -->
                                                <table class="table table-hover table-borderless mb-0">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 210px">Nama Lengkap</th>
                                                        <td>{{ $b->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">NIS/NISN</th>
                                                        <td>{{ $b->nis }} / {{ $b->nisn }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Jenis Kelamin</th>
                                                        <td>{{ $b->gender }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tempat Lahir</th>
                                                        <td>{{ $b->birth_place }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Lahir</th>
                                                        <td>{{ $b->birth_date }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kelas</th>
                                                        <td>{{ $b->class }} {{ $b->category }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!-- End Table with hoverable rows -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="opt" id="options">
                                        <a type="buton" href="/adm-edit-data-siswa-{{ $b->slug }}" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i> Edit</a><br>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delstdModal-{{ $b->slug }}"><i class="bi bi-trash"></i> Hapus</button>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>

                    <div class="tab-pane fade show class-5c pt-3" id="class-5c">
                        <div style="text-align: start; padding-bottom: 20px;">
                            <a type="button" href="/adm-data-siswa-download-{{ $sc->class }}-{{ $sc->category }}" class="btn btn-success"><i class="bi bi-download"></i> Unduh Data</a>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped" id="tb-tcrdata">
                            <thead>
                            <tr>
                                <th scope="col" class="nb">#</th>
                                <th scope="col" class="pct">Foto</th>
                                <th scope="col" class="data">Data Siswa</th>
                                <th scope="col" class="opt">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($students5c as $index => $c )
                                <!-- Delete Teacher Modal -->
                                <div class="modal fade" id="delstdModal-{{ $c->slug }}" role="dialog" tabindex="-1" aria-labelledby="delstdModalLabel-{{ $c->slug }}" aria-hidden="true" data-bs-backdrop="static">
                                    <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="delstdModalLabel-{{ $c->slug }}">Perhatian!!!</h1>
                                            </div>

                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data ini?
                                            </div>

                                            <div class="modal-footer">
                                                <form action="/adm-delete-data-siswa-{{ $c->slug }}" method="POST">
                                                    @csrf
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-danger">Hapus Data</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <tr>
                                    <th scope="row" class="nb">{{ $index + 1}}</th>
                                    <td class="pct">
                                        <img src="{{ asset('storage/'.$c->img_name) }}" alt="" class="img-tcr">
                                    </td>
                                    <td class="data">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- Table with hoverable rows -->
                                                <table class="table table-hover table-borderless mb-0">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 210px">Nama Lengkap</th>
                                                        <td>{{ $c->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">NIS/NISN</th>
                                                        <td>{{ $c->nis }} / {{ $c->nisn }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Jenis Kelamin</th>
                                                        <td>{{ $c->gender }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tempat Lahir</th>
                                                        <td>{{ $c->birth_place }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Lahir</th>
                                                        <td>{{ $c->birth_date }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kelas</th>
                                                        <td>{{ $c->class }} {{ $c->category }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!-- End Table with hoverable rows -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="opt" id="options">
                                        <a type="buton" href="/adm-edit-data-siswa-{{ $c->slug }}" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i> Edit</a><br>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delstdModal-{{ $c->slug }}"><i class="bi bi-trash"></i> Hapus</button>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>


            </div>

          </div>

    </section>

@endsection
