@extends('admin.app')

@section('title', 'Data Pengumuman')

@section('content')
<div class="pagetitle">
    <h1>Pengumuman</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Pengumuman</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

        <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <h5 class="card-title">Pengumuman SD YPKP 2 SENTANI</h5>
                  </div>
                  <div class="col" id="ops">
                      <a type="button" href="/adm-tambah-data-pengumuman" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data</a>
                      <a type="button" href="/adm-pengumuman-download-pdf" class="btn btn-success"><i class="bi bi-download"></i> Unduh Data</a>
                  </div>
              </div>
            <!-- Table with stripped rows -->
            <table class="table table-striped" id="tb-tcrdata">
              <thead>
                <tr>
                  <th scope="col" class="nb">#</th>
                  <th scope="col" class="pct">Foto</th>
                  <th scope="col" class="nm">Judul Pengumuman</th>
                  <th scope="col" class="data">Deskripsi Pengumuman</th>
                  <th scope="col" class="opt">Opsi</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($announ as $index => $a)
                     <!-- Delete News Modal -->
                     <div class="modal fade" id="delnewsModal-{{ $a->slug }}" role="dialog" tabindex="-1" aria-labelledby="delnewsModalLabel-{{ $a->slug }}" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="delnewsModalLabel-{{ $a->slug }}">Perhatian!!!</h1>
                                </div>

                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data ini?
                                </div>

                                <div class="modal-footer">
                                    <form action="/adm-hapus-data-pengumuman-{{ $a->slug }}" method="POST">
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
                            <img src="{{ asset('storage/'.$a->img_name) }}" alt="" class="img-tcr">
                        </td>
                        <td class="data">
                            {{ $a->name }}
                        </td>
                        <td class="dsc">
                            {{ $a->desc }}
                        </td>
                        <td class="opt" id="options">
                            <a type="buton" href="/adm-edit-data-pengumuman-{{ $a->slug }}" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i> Ubah</a><br>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delnewsModal-{{ $a->slug }}"><i class="bi bi-trash"></i> Hapus</button>
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
