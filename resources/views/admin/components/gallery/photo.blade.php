@extends('admin.app')

@section('title', 'Data Galeri Foto')

@section('content')
<div class="pagetitle">
    <h1>Galeri Foto</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Galeri Foto</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section Galeri Foto">
    <div id="ops" class="pt-0 pb-4">
        <a type="button" href="/adm-tambah-data-galeri-foto" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data</a>
        <button type="button" class="btn btn-success"><i class="bi bi-download"></i> Unduh Data</button>
    </div>
    <div class="galery-photo">

        @foreach ($photo  as $p)
            <!-- Delete Photo Modal -->
            <div class="modal fade" id="delphotoModal-{{ $p->slug }}" role="dialog" tabindex="-1" aria-labelledby="delphotoModalLabel-{{ $p->slug }}" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered" id="deletemodal" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="delphotoModalLabel-{{ $p->slug }}">Perhatian!!!</h1>
                        </div>

                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus data ini?
                        </div>

                        <div class="modal-footer">
                            <form action="/adm-hapus-data-galeri-foto-{{ $p->slug }}" method="POST">
                                @csrf
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-danger">Hapus Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Photo Card -->
            <div class="card" id="photo-card">
                <div class="card-body">
                    <div class="photo-title">
                        <h5 class="card-title">{{ $p->name }}</h5>
                    </div>

                    <div class="photo-view">
                        <img src="{{ asset('storage/'.$p->img_name) }}" class="card-img-top">
                    </div>
                    <div class="desc-photo">
                        <p class="card-text">{{ $p->desc }}</p>
                    </div>
                </div>
                <div class="card-footer" id="options">
                    <a type="buton" href="/adm-edit-data-galeri-foto-{{ $p->slug }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Ubah</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delphotoModal-{{ $p->slug }}"><i class="bi bi-trash"></i> Hapus</button>
                </div>
            </div>

        @endforeach

    </div>
</section>

@endsection
