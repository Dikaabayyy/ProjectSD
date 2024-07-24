@extends('admin.app')

@section('title', 'Data Kegiatan Sekolah')

@section('content')
<div class="pagetitle">
    <h1>Kegiatan Sekolah</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Kegiatan Sekolah</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

        <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <h5 class="card-title">Kegiatan Sekolah SD YPKP 2 SENTANI</h5>
                  </div>
                  <div class="col" id="ops">
                      <a type="button" href="/adm-tambah-data-kegiatan" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data</a>
                      <button type="button" class="btn btn-success"><i class="bi bi-download"></i> Unduh Data</button>
                  </div>


              </div>
            <!-- Table with stripped rows -->
            <table class="table table-striped" id="tb-tcrdata">
              <thead>
                <tr>
                  <th scope="col" class="nb">#</th>
                  <th scope="col" class="pct">Foto</th>
                  <th scope="col" class="nm">Nama Kegiatan</th>
                  <th scope="col" class="data">Deskripsi Singkat Kegiatan</th>
                  <th scope="col" class="opt">Opsi</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($activity as $index => $a)
                     <!-- Delete Extracurricular Modal -->
                     <div class="modal fade" id="delextraModal-{{ $a->slug }}" role="dialog" tabindex="-1" aria-labelledby="delextraModalLabel-{{ $a->slug }}" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="delextraModalLabel-{{ $a->slug }}">Perhatian!!!</h1>
                                </div>

                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data ini?
                                </div>

                                <div class="modal-footer">
                                    <form action="/adm-hapus-data-kegiatan-{{ $a->slug }}" method="POST">
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
                            {{ $index + 1 }}
                        </th>
                        <td class="pct">
                            <img src="" alt="" class="img-tcr">
                        </td>
                        <td class="data">
                            {{ $a->name }}
                        </td>
                        <td class="dsc">
                            {{ $a->desc }}
                        </td>
                        <td class="opt" id="options">
                            <a type="buton" href="/adm-edit-data-kegiatan-{{ $a->slug }}" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i> Ubah</a><br>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delextraModal-{{ $a->slug }}"><i class="bi bi-trash"></i> Hapus</button>
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
