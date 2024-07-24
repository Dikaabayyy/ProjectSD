@extends('admin.app')

@section('title', 'Tujuan Sekolah')

@section('content')
    <div class="pagetitle">
      <h1>Tujuan Sekolah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Tujuan Sekolah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tujuan Sekolah SD YPKP 2 SENTANI</h5>

              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="tujuan-sekolah-tab" data-bs-toggle="tab" data-bs-target="#bordered-tujuan-sekolah" type="button" role="tab" aria-controls="tujuan-sekolah" aria-selected="true">Tujuan Sekolah</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="edit-tujuan-tab" data-bs-toggle="tab" data-bs-target="#bordered-edit-tujuan" type="button" role="tab" aria-controls="edit-tujuan" aria-selected="false">Edit</button>
                </li>
              </ul>

              @foreach ($goals as $g)
              <div class="tab-content pt-2" id="borderedTabContent">


                <div class="tab-pane fade show active" id="bordered-tujuan-sekolah" role="tabpanel" aria-labelledby="tujuan-sekolah-tab" style="text-align: justify">
                    @foreach (explode("\n", $g->goals) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>

                <div class="tab-pane fade" id="bordered-edit-tujuan" role="tabpanel" aria-labelledby="edit-tujuan-tab">
                    <form action="/adm-update-tujuan-sekolah-{{ $g->slug }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="text" name="slug" hidden value="{{ $g->slug }}">

                        <div class="row">
                            <div class="mt-3 mb-3">
                                <textarea class="form-control" rows="12" style="resize: none" name="goals">{{ $g->goals }}</textarea>
                            </div>
                        </div>
                        <div class="" id="options">
                            <button type="submit" class="btn btn-success mr-3"><i class="bi bi-save"></i> Simpan Perubahan</button>
                        </div>

                    </form>
                </div>
            </div><!-- End Bordered Tabs -->
            @endforeach

            </div>

          </div>

    </section>

@endsection
