@extends('admin.app')

@section('title', 'Visi & Misi Sekolah')

@section('content')
    <div class="pagetitle">
      <h1>Visi & Misi Sekolah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Visi & Misi Sekolah</li>
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

              <div class="tab-content pt-2" id="borderedTabContent">

                @foreach ($visimisi as $v)

                    <div class="tab-pane fade show active" id="bordered-visi-sekolah" role="tabpanel" aria-labelledby="visi-sekolah-tab">
                        {{ $v->visi}}
                    </div>

                    <div class="tab-pane fade" id="bordered-misi-sekolah" role="tabpanel" aria-labelledby="misi-sekolah-tab">
                        {{ $v->misi }}
                    </div>

                @endforeach

              </div><!-- End Bordered Tabs -->

            </div>
            <div class="card-footer">
                <a type="button" href="/adm-edit-visi-misi" class="btn btn-warning rounded-pill"><i class="bi bi-pencil-square"></i> Edit Visi & Misi</a>
            </div>

          </div>

    </section>

@endsection
