@extends('admin.app')

@section('title', 'Tentang Sekolah')

@section('content')
    <div class="pagetitle">
      <h1>Tentang Sekolah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Tentang Sekolah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tentang Sekolah SD YPKP 2 SENTANI</h5>

              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="tentang-sekolah-tab" data-bs-toggle="tab" data-bs-target="#bordered-tentang-sekolah" type="button" role="tab" aria-controls="tentang-sekolah" aria-selected="true">Tentang Sekolah</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="edit-tentang-tab" data-bs-toggle="tab" data-bs-target="#bordered-edit-tentang" type="button" role="tab" aria-controls="edit-tentang" aria-selected="false">Edit</button>
                </li>
              </ul>

              @foreach ($about as $a)


              <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-tentang-sekolah" role="tabpanel" aria-labelledby="tentang-sekolah-tab" style="text-align: justify">
                    @foreach (explode("\n", $a->about) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>

                <div class="tab-pane fade" id="bordered-edit-tentang" role="tabpanel" aria-labelledby="edit-tentang-tab">
                    <form action="/adm-update-tentang-sekolah-{{ $a->slug }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="text" name="slug" hidden value="{{ $a->slug }}">

                        <div class="row">
                            <div class="mt-3 mb-3">
                                <textarea class="form-control" rows="12" style="resize: none" name="about">{{ $a->about }}
                                </textarea>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-success rounded-pill mr-3"><i class="bi bi-save"></i> Simpan Perubahan</button>
                        </div>

                    </form>
                </div>
              </div><!-- End Bordered Tabs -->

              @endforeach
            </div>

          </div>

    </section>

@endsection
