@extends('admin.app')

@section('title', 'Data Pesan Masuk')

@section('content')
<div class="pagetitle">
    <h1>Data Pesan Masuk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pesan Masuk</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">

        <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <h5 class="card-title">Data Pesan Masuk SD YPKP 2 SENTANI</h5>
                  </div>
              </div>
            <!-- Table with stripped rows -->
            <table class="table table-striped" id="tb-tcrdata">
              <thead>
                <tr>
                  <th scope="col" class="nb">#</th>
                  <th scope="col" class="nm">Nama</th>
                  <th scope="col" class="nm">Email</th>
                  <th scope="col" class="nm">No HP</th>
                  <th scope="col" class="nm">Pesan</th>
                  <th scope="col" class="opt">Opsi</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($message as $index => $m )

                    <!-- Detail Messages Modal -->
                    <div class="modal fade" id="detailMessModal-{{ $m->slug }}" role="dialog" tabindex="-1" aria-labelledby="detailMessModalLabel-{{ $m->slug }}" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="detailMessModalLabel-{{ $m->slug }}">Pesan Masuk</h1>
                                </div>

                                <div class="modal-body body-message">
                                    <div class="name">
                                        <span>Nama Pengirim</span>
                                        <h5>{{ $m->name }}</h5>
                                    </div>
                                    <div class="detail-message">
                                        <div class="detail-email">
                                            <span>Email</span>
                                            <p>{{ $m->email }}</p>
                                        </div>
                                        <div class="detail-hp">
                                            <span>No HP</span>
                                            <p>{{ $m->no_hp }}</p>
                                        </div>
                                        <div class="detail-message">
                                            <span>Isi Pesan</span>
                                            @foreach (explode("\n", $m->messages) as $paragraph)
                                                <p style="margin-bottom: 3px">{{ $paragraph }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Delete Messages Modal -->
                     <div class="modal fade" id="delmessModal-{{ $m->slug }}" role="dialog" tabindex="-1" aria-labelledby="delmessModalLabel-{{ $m->slug }}" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="delmessModalLabel-{{ $m->slug }}">Perhatian!!!</h1>
                                </div>

                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus akun ini?
                                </div>

                                <div class="modal-footer">
                                    <form action="/adm-hapus-pesan-{{ $m->slug }}" method="POST">
                                        @csrf
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Kembali</button>
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
                            {{ $m->name }}
                        </td>
                        <td class="data">
                            {{ $m->email }}
                        </td>
                        <td class="data">
                            {{ $m->no_hp }}
                        </td>
                        <td class="data">
                            {{ $m->messages }}
                        </td>
                        <td class="opt" id="options">
                            <button type="button" class="btn btn-success mb-3" style="margin-right: 0px;" data-toggle="modal" data-target="#detailMessModal-{{ $m->slug }}"><i class="bi bi-info-circle"></i> Lihat Detail</a><br>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delmessModal-{{ $m->slug }}"><i class="bi bi-trash"></i> Hapus</button>
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
