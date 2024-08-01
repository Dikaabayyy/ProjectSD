@extends('admin.app')

@section('title', 'Edit Profil')

@section('content')
<div class="pagetitle">
    <h1>Edit Profil</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Profil</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{ asset('storage/'.Auth::user()->profile_img) }}" alt="Profile" class="rounded-circle">
            <h2 class="mb-3">{{ Auth::user()->name }}</h2>
            <h3>{{ Auth::user()->role }}</h3>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="/adm-update-profile-{{ Auth::user()->username }}" enctype="multipart/form-data" method="POST">
                    @csrf

                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                    <div class="col-md-8 col-lg-9">
                        <div class="d-flex align-items-center ">
                            <img src="{{ asset('storage/'.Auth::user()->profile_img) }}" class="prev-news" alt="">
                            <img id="preview" class="preview prev-news" src="#" alt="Pratinjau Gambar" style="display: none;">
                            <input type="file" name="image" id="image" accept="image/*" onchange="previewImage(event)">
                        </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="username" type="text" class="form-control" id="username" value="{{ Auth::user()->username }}">
                      @if ($errors->has('username'))
                        <div class="text-danger">{{ $errors->first('username') }}</div>
                      @endif
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="name" type="text" class="form-control" id="name" value="{{ Auth::user()->name }}">
                      @if ($errors->has('name'))
                          <div class="text-danger">{{ $errors->first('name') }}</div>
                      @endif
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="{{ Auth::user()->email }}">
                      @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                      @endif
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form action="/adm-update-password-{{ Auth::user()->username }}" enctype="multipart/form-data" method="POST">
                    @csrf

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="password" class="form-control" id="password" name="password">
                      @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                      @endif
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input  type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                      @if ($errors->has('password_confirmation'))
                        <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                      @endif
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection
