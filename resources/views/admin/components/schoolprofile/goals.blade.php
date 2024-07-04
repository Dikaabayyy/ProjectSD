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

              <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-tujuan-sekolah" role="tabpanel" aria-labelledby="tujuan-sekolah-tab">
                  Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                </div>

                <div class="tab-pane fade" id="bordered-edit-tujuan" role="tabpanel" aria-labelledby="edit-tujuan-tab">
                    <div class="row">
                        <div class="mt-3 mb-3">
                          <textarea class="form-control" rows="5" style="resize: none">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                          </textarea>
                        </div>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-success rounded-pill mr-3"><i class="bi bi-save"></i> Simpan Perubahan</button>
                    </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>

          </div>

    </section>

@endsection
