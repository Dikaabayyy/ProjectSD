@extends('users.app')

@section('title', 'Beranda')

@section('link-css', )
    <link rel="stylesheet" href="{{ asset('css/users/home.css')}}">
@endsection

@section('content')
<div class="home" id="home">

        <div class="welcome-home">
            <div class="container">

                <div class="card text-bg-dark card-welcome-home">
                    <img src="img/main/Home1.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">SD YPKP 2 SENTANI</h5>
                        <p class="card-text">Kami Datang, Kami Belajar. Kami Pulang, Kami Terpelajar.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="welcome-info">
            <div class="container">

                <div class="welcome-text">

                        <div class="card card-welcome-info">
                            <div class="card-body">
                                <h5 class="card-title">Selamat Datang di Website Resmi SD YPKP 2 Sentani</h5>
                                <div class="welcome-info-item">
                                    <p>Terima kasih telah berkunjung di website kami.</p>
                                </div>
                                <div class="welcome-point">
                                    <div class="welcome-point-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16"><path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/></svg>
                                        <h6>Sekolah Unggul</h6>
                                        <p>Mempersiapkan calon pemimpin <br>yang saleh, cerdas, dan berbakat.</p>
                                    </div>
                                    <div class="welcome-point-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16"><path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"/><path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"/></svg>
                                        <h6>Sekolah Berprestasi</h6>
                                        <p>Menghasilkan siswa yang berprestasi <br> dalam bidang akademik dan keagamaan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

            </div>

        </div>

        <div id="welcome-abt">
            <div class="container">
                <div class="welcome-about">
                    <div class="card card-about">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="" class="img-fluid rounded-start" alt=""></img>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tentang SD YPKP 2 Sentani</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="welcome-reason">
            <div class="container">

                <div class="reason-title">
                    <h5>Kenapa Sekolah Kami?</h5>
                </div>

                <div class="reason-item">
                    <div class="card card-reason">
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book-half reason-icon" viewBox="0 0 16 16"><path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/></svg>
                                <h5 class="card-title">Bentuk Pembelajaran Dinamis</h5>
                                <p class="card-text">Sistem pengajaran yang fleksibel dapat disesuaikan dengan perkembangan dan kebutuhan anak, sehingga mampu mendukung berbagai metode belajar yang berbeda.</p>
                        </div>
                    </div>
                    <div class="card card-reason">
                        <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-raised-hand reason-icon" viewBox="0 0 16 16"><path d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207"/><path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/></svg>
                            <h5 class="card-title">Tenaga Pendidik Profesional</h5>
                            <p class="card-text">Para guru merupakan sarjana yang ahli di bidangnya dan telah bersertifikasi sebagai pendidik.</p>
                        </div>
                    </div>
                    <div class="card card-reason">
                        <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill reason-icon" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/></svg>
                            <h5 class="card-title">Lokasi yang Strategis</h5>
                            <p class="card-text">Lokasi sekolah yang berada di area strategis dalam konteks komunitas lokal dan dekat dengan fasilitas umum, seperti pusat-pusat kegiatan sosial dan pemerintahan.</p>
                        </div>
                    </div>
                    <div class="card card-reason">
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-buildings-fill reason-icon" viewBox="0 0 16 16"><path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/></svg>
                            <h5 class="card-title">Fasilitas Lengkap</h5>
                            <p class="card-text">Gedung yang memadai dan sangat aman dan nyaman yang digunakan untuk kegiatan belajar-mengajar.</p>
                        </div>
                    </div>
                    <div class="card card-reason">
                        <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star-fill reason-icon" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
                            <h5 class="card-title">Ekskul yang Variatif</h5>
                            <p class="card-text">Kegiatan ekstrakurikuler sangat beragam dan mampu mendukung perkembangan psikologi, kemandirian, kreativitas, prestasi, serta inovasi anak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="welcome-news">
            <div class="container">
                <div class="news-title">
                    <h5>Berita Sekolah</h5>
                </div>
                <div class="news-all">

                    <div class="first-news">
                        @foreach ($news as $n)
                        <div class="card card-first-news">
                            <img src="{{ asset('storage/'.$n->img_name) }}" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title">{{ $n->name }}</h5>
                              <p class="card-text">{{ $n->updated_at->translatedFormat('l, d M Y') }}</p>
                            </div>
                          </div>
                        @endforeach
                    </div>

                    <div class="news-list">
                        <div class="news-item">

                            @foreach ($newslist as $nl)
                            <div class="card card-second-news" >
                                <div class="card-news-list">
                                    <div class="card-news-list-img">
                                        <img src="{{ asset('storage/'.$nl->img_name) }}" class="img-fluid">
                                    </div>
                                    <div class="card-news-list-dsc">
                                        <h5 class="card-title">{{ $nl->name }}</h5>
                                        <p class="card-text">{{ $nl->updated_at->translatedFormat('l, d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>
                <div class="all-news">
                    <a href="/berita-sekolah" class="" type="btn">Lihat Berita Selengkapnya ...</a>
                </div>
            </div>
        </div>

        <div id="welcome-activity">
            <div class="container activity-welcome">

                <div class="welcome-agenda">
                    <div class="agenda-title">
                        <h5>Agenda</h5>
                        <svg height="5" width="270" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0" y1="10" x2="270" y2="10" style="stroke:rgb(0, 0, 0);stroke-width:12" />
                        </svg>
                    </div>

                    @foreach ($agendas as $a)

                        <div class="agenda-detail">
                            <div class="agenda-time">
                                <div class="agenda-day">
                                    {{ $a->day }}
                                </div>
                                <div class="agenda-month">
                                    {{ $a->month }}
                                </div>
                            </div>
                            <div class="agenda-desc">
                                <div class="agenda-name">
                                    {{ $a->name }}
                                </div>
                                <div class="agenda-date">
                                    <div class="agenda-hours">
                                        {{ $a->formatted_time }} - Selesai
                                    </div>
                                    <div class="agenda-loc">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/></svg>
                                        {{ $a->location }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <div class="all-agenda">
                        <a href="/agenda-sekolah" class="" type="btn">Lihat Agenda Selengkapnya ...</a>
                    </div>
                </div>

                <div class="welcome-gallery-photo">
                    <div class="gallery-title">
                        <h5>Galeri</h5>
                        <svg height="5" width="300" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0" y1="10" x2="300" y2="10" style="stroke:rgb(0, 0, 0);stroke-width:12" />
                        </svg>
                    </div>
                    <div class="gallery-item">
                        @foreach ($galleryphoto as $g)

                        <div class="gallery-img">
                            <img src="{{ asset('storage/'.$g->img_name) }}" alt="" />
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div id="welcome-contact">
            <div class="container">

                <div class="welcome-contact-title">
                    <h5>Hubungi Kami</h5>
                </div>
                <div class="contact-form-sosmed">
                    <div class="contact-form">
                        <div class="contact-form-title">
                            <h6>Kirim Pesan</h6>
                        </div>
                        <form action="" class="form-contact">
                            <input type="text" name="name" class="name" id="" placeholder="Nama" style="outline: none;">
                            <div class="contact-email-no">
                                <input type="email" name="email" id="" placeholder="Email"  style="outline: none;">
                                <input type="text" name="no_hp" placeholder="No Hp"  style="outline: none;">
                            </div>
                            <textarea name="message" placeholder="Tulis Pesan Anda" rows="5" style="outline: none;"></textarea>
                            <button type="submit" class="btn">Kirim Pesan</button>
                        </form>
                    </div>

                    <div class="contact-social-media">
                        <div class="sosmed-title">
                            <h6>Sosial Media Kami</h6>
                        </div>
                        <div class="sosmed-item">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
