@extends('admin.app')

@section('title', 'Sambutan Kepala Sekolah')

@section('content')
    <div class="pagetitle">
      <h1>Sambutan Kepala Sekolah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Sambutan Kepala Sekolah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sambutan Kepala Sekolah SD YPKP 2 SENTANI</h5>

              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="greets-sekolah-tab" data-bs-toggle="tab" data-bs-target="#bordered-greets-sekolah" type="button" role="tab" aria-controls="greets-sekolah" aria-selected="true">Sambutan Kepala Sekolah</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="edit-greets-tab" data-bs-toggle="tab" data-bs-target="#bordered-edit-greets" type="button" role="tab" aria-controls="edit-greets" aria-selected="false">Edit</button>
                </li>
              </ul>

              @foreach ($greets as $h)

                <div class="tab-content pt-2" id="borderedTabContent">
                    <div class="tab-pane fade show active" id="bordered-greets-sekolah" role="tabpanel" aria-labelledby="greets-sekolah-tab" style="text-align: justify">
                        @foreach (explode("\n", $h->greets) as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="bordered-edit-greets" role="tabpanel" aria-labelledby="edit-greets-tab">
                        <form action="/adm-update-sambutan-kepala-sekolah-{{ $h->slug }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="text" name="slug" hidden value="{{ $h->slug }}">

                            <div class="row">
                                <div class="mt-3 mb-3">
                                    <textarea class="form-control" rows="12" style="resize: none" name="greets">{{ $h->greets }}</textarea>
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
