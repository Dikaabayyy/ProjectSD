@extends('admin.app')

@section('title', 'Profile')

@section('content')
<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Profile</li>
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

                <h5 class="card-title">Detail Profil</h5>


                <table class="table table-borderless" id="profile-card">
                    <tbody>
                        <tr>
                            <th>
                                <h6>Username</h6>
                            </th>
                            <td>
                                <span>{{ Auth::user()->username }}</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6>Nama Lengkap</h6>
                            </th>
                            <td>
                                <span>{{ Auth::user()->name }}</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6>Email</h6>
                            </th>
                            <td>
                                <span>{{ Auth::user()->email }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection
