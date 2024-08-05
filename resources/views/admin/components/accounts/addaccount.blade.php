@extends('admin.app')

@section('title', 'Tambah Data Akun Guru')

@section('content')
    <div class="pagetitle">
      <h1>Tambah Data Akun Guru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adm-akun-guru">Data Akun Guru</a></li>
          <li class="breadcrumb-item active">Tambah Data Akun Guru</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">

            <div class="card">
              <div class="card-body pt-3">

                    <!-- Profile Edit Form -->
                    <form action="/adm-store-data-akun" enctype="multipart/form-data" method="POST">
                        @csrf

                      <div class="row mb-3">
                        <label for="inputname" class="col-md-4 col-lg-3 col-form-label">Nama Guru</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="inputname" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputemail" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="text" class="form-control" id="inputemail" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="password" class="form-control" id="password" name="password">
                            @if ($errors->has('password'))
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">Konfirmasi Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>
                      </div>

                      <div class="d-flex justify-content-end">
                        <span class="span sp password-toggle" onclick="togglePassword('password'), togglePassword('password_confirmation')">Lihat Password</span>
                      </div>

                      <div class="text-center" id="options">
                        <button type="submit" class="btn btn-success" style="margin-right: 15px"><i class="bi bi-save"></i> Simpan</button>
                    </form><!-- End Profile Edit Form -->
                        <a type="button" href="/adm-akun-guru" class="btn btn-secondary"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                </div>

              </div>
            </div>

      </section>

@endsection
