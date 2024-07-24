@extends('admin.app')

@section('title', 'Struktur Organisasi')

@section('content')
    <div class="pagetitle">
      <h1>Struktur Organisasi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Struktur Organisasi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Struktur Organisasi SD YPKP 2 SENTANI</h5>

              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="structure-tab" data-bs-toggle="tab" data-bs-target="#bordered-structure" type="button" role="tab" aria-controls="structure" aria-selected="true">Struktur Organisasi</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="edit-structure-tab" data-bs-toggle="tab" data-bs-target="#bordered-edit-structure" type="button" role="tab" aria-controls="edit-structure" aria-selected="false">Edit</button>
                </li>
              </ul>

              <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-structure" role="tabpanel" aria-labelledby="structure-tab">
                  Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                </div>

                <div class="tab-pane fade" id="bordered-edit-structure" role="tabpanel" aria-labelledby="edit-structure-tab">
                    <div class="row">
                        <div class="mt-3 mb-3">
                          <textarea class="form-control" rows="5" style="resize: none">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                          </textarea>
                        </div>
                    </div>
                    <div class="" id="options">
                        <button type="button" class="btn btn-success mr-3"><i class="bi bi-save"></i> Simpan Perubahan</button>
                    </div>
                </div>
              </div><!-- End Bordered Tabs -->

            </div>

          </div>

    </section>

@endsection
