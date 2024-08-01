@extends('admin.app')

@section('title', 'Dashboard')

@section('content')
    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- School's Profile Card -->
            <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                <div class="card-body">
                    <div class="title-db">
                        <span>"Kami Datang Belajar, Kami Pulang Terpelajar"</span>
                    </div>

                    <div id="schools-profile">
                        <div class="d-flex">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-3">
                                <i class="bi bi-buildings"></i>
                            </div>
                            <h5 class="card-title">Tentang Sekolah</h5>
                        </div>

                        @foreach ($about as $a)

                            <div class="d-flex align-items-center">
                                <div style="text-align: justify" class="mt-3">
                                    <span>
                                        @foreach (explode("\n", $a->about) as $paragraph)
                                            <p style="margin-bottom: 3px">{{ $paragraph }}</p>
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div id="vm-profile">

                        <div class="d-flex">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-3">
                                <i class="bi bi-card-text"></i>
                            </div>
                            <h5 class="card-title">Visi & Misi</h5>
                        </div>

                        @foreach ($visimisi as $v)

                            <div class="d-flex align-items-center">
                                <div style="text-align: justify" class="mt-3">
                                    <div id="visi-db">
                                        <h6>Visi</h6>
                                        <span>{{ $v->visi }}</span>
                                    </div>

                                    <div id="misi-db">
                                        <h6 style="text-align: justify" class="mt-3">Misi</h6>
                                        <span style="text-align: justify" class="mt-3">
                                            @foreach (explode("\n", $v->misi) as $paragraph)
                                            <p style="margin-bottom: 3px">{{ $paragraph }}</p>
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

                    <div id="goals-profile">

                        <div class="d-flex">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-3">
                                <i class="bi bi-bookmark-star"></i>
                            </div>
                            <h5 class="card-title">Tujuan</h5>
                        </div>

                        @foreach ($goals as $g)

                            <div class="d-flex align-items-center">
                                <div style="text-align: justify" class="mt-3">
                                    <span>
                                        @foreach (explode("\n", $g->goals) as $paragraph)
                                            <p style="margin-bottom: 3px">{{ $paragraph }}</p>
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                </div>

            </div><!-- End Customers Card -->

            <!-- Class 1 Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Data Siswa Kelas 1</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


            <!-- Class 2 Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">Data Siswa Kelas 2</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->


            <!-- Class 3 Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">Data Siswa Kelas 3</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->


            <!-- Class 4 Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">Data Siswa Kelas 4</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->


            <!-- Class 5 Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">Data Siswa Kelas 5</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->


            <!-- Class 6 Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">Data Siswa Kelas 6</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card" id="teachers-data">

            <div class="card-body">
              <h5 class="card-title">Data Guru SD YPKP 2 SENTANI</h5>

              <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th class="ph">Foto</th>
                          <th class="nm">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teacher as $t)
                            <tr>

                                <td class="ph">
                                    <img src="{{ asset('storage/'.$t->img_name) }}" alt="" class="img-tcr">
                                </td>
                                <td>
                                    {{ $t->name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>



            </div>
          </div><!-- End Recent Activity -->

        </div><!-- End Right side columns -->

      </div>
    </section>

@endsection
