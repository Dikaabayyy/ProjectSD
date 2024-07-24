@extends('admin.app')

@section('title', 'Edit Visi & Misi Sekolah')

@section('content')
    <div class="pagetitle">
      <h1>Edit Visi & Misi Sekolah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Edit Visi & Misi Sekolah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Visi & Misi Sekolah SD YPKP 2 SENTANI</h5>

              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="visi-sekolah-tab" data-bs-toggle="tab" data-bs-target="#bordered-visi-sekolah" type="button" role="tab" aria-controls="visi-sekolah" aria-selected="true">Visi Sekolah</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="misi-sekolah-tab" data-bs-toggle="tab" data-bs-target="#bordered-misi-sekolah" type="button" role="tab" aria-controls="misi-sekolah" aria-selected="false">Misi Sekolah</button>
                </li>
              </ul>

              @foreach ($visimisi as $v)
              <form action="/adm-update-visi-misi-{{ $v->slug }}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" name="slug" hidden value="{{ $v->slug }}">

                <div class="tab-content pt-2" id="borderedTabContent">

                    <div class="tab-pane fade show active" id="bordered-visi-sekolah" role="tabpanel" aria-labelledby="visi-sekolah-tab">
                        <div class="mt-3 mb-3">
                            <textarea class="form-control" rows="12" style="resize: none" name="visi">{{ $v->visi }}
                            </textarea>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="bordered-misi-sekolah" role="tabpanel" aria-labelledby="edit-tentang-tab">
                        <div class="mt-3 mb-3">
                            <textarea class="form-control" rows="12" style="resize: none" name="misi">{{ $v->misi }}
                            </textarea>
                        </div>
                    </div>

                </div><!-- End Bordered Tabs -->

            </div>
            <div class="card-footer" id="options">
                <button type="submit" class="btn btn-success mr-3"><i class="bi bi-save"></i> Simpan Perubahan</button>
                <a type="button" href="/adm-visi-misi" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
            </div>
        </form>

        @endforeach

          </div>

    </section>

@endsection
