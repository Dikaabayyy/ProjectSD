@extends('admin.app')

@section('title', 'Data Agenda')

@section('content')
<div class="pagetitle">
    <h1>Agenda</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Agenda</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

        <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <h5 class="card-title">Agenda SD YPKP 2 SENTANI</h5>
                  </div>
                  <div class="col" id="ops">
                      <a type="button" href="/adm-tambah-data-agenda" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data</a>
                      <a type="button" href="/adm-agenda-download-pdf" class="btn btn-success"><i class="bi bi-download"></i> Unduh Data</a>
                  </div>
              </div>
            <!-- Table with stripped rows -->
            <table class="table table-striped" id="tb-tcrdata">
              <thead>
                <tr>
                  <th scope="col" class="nb">#</th>
                  <th scope="col" class="nm">Judul Agenda</th>
                  <th scope="col" class="data">Deskripsi Agenda</th>
                  <th scope="col" class="data">Lokasi Agenda</th>
                  <th scope="col" class="nm">Tanggal Mulai</th>
                  <th scope="col" class="nm">Tanggal Selesai</th>
                  <th scope="col" class="opt">Opsi</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($agendas as $index => $a)
                     <!-- Delete News Modal -->
                     <div class="modal fade" id="delagendaModal-{{ $a->slug }}" role="dialog" tabindex="-1" aria-labelledby="delagendaModalLabel-{{ $a->slug }}" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="delagendaModalLabel-{{ $a->slug }}">Perhatian!!!</h1>
                                </div>

                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus data ini?
                                </div>

                                <div class="modal-footer">
                                    <form action="/adm-hapus-data-agenda-{{ $a->slug }}" method="POST">
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
                        <td class="data">
                            {{ $a->name }}
                        </td>
                        <td class="dsc">
                            {{ $a->desc }}
                        </td>
                        <td class="data">
                            {{ $a->location }}
                        </td>
                        <td class="data">
                            {{ $a->formatted_date_start }}, Jam {{ $a->formatted_time_start }}
                        </td>
                        <td class="data">
                            {{ $a->formatted_date_end }}, Jam {{ $a->formatted_time_end }}
                        </td>
                        <td class="opt" id="options">
                            <a type="buton" href="/adm-edit-data-agenda-{{ $a->slug }}" class="btn btn-warning mb-3"><i class="bi bi-pencil-square"></i> Ubah</a><br>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delagendaModal-{{ $a->slug }}"><i class="bi bi-trash"></i> Hapus</button>
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
