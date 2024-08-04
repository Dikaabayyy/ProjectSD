<div class="header">
    <div class="" id="top-header">
        <div class="container header-email-timer">
                <a href="" class="header-email">
                    <span class="head-email">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16"><path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/><path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/></svg>
                    </span>
                    <h6>
                        sdypkp2sentani@gmail.com
                    </h6>
                </a>
            <span class="header-time">
                <div id="date"></div>,
                <div id="clock"></div>
            </span>
        </div>
    </div>

    <div class="bottom-header">
        <div class="container">

            <div class="" id="header">
                <div class="logo-home d-flex">
                    <div >
                        <img src="img/main/logo.png" class="logoImage" alt="" />
                    </div>
                </div>
                <div class="nav-items">
                    <span>
                        <a href="/beranda" class="{{ Route::is('welcome') ? 'btn-nav-link' : 'btn-nav-link collapsed' }}">Beranda</a>
                    </span>
                    <span>
                        <a href="#" id="hoverBtnProfil" class="{{ Route::is('tentang', 'visimisi', 'sambutan', 'tujuan', 'kegiatan', 'ekstra', 'fasilitas', 'pres-kab', 'pres-prov', 'pres-nas') ? 'btn-nav-link hover-btn' : 'hover-btn btn-nav-link collapsed' }}">Profil</a>
                        <div class="card-hover-profil" id="card-hover-profil">
                            <div class="card-dropdown">

                                <div class="abt-sch">
                                    <h5>Tentang Sekolah</h5>
                                    <div class="abt-sch-item">
                                        <a href="/tentang-kami" class="{{ Route::is('tentang') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Tentang Kami</a>
                                        <a href="/visi-misi-sekolah" class="{{ Route::is('visimisi') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Visi & Misi</a>
                                        <a href="/sambutan-kepala-sekolah" class="{{ Route::is('sambutan') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Sambutan Kepala Sekolah</a>
                                        <a href="/tujuan-sekolah" class="{{ Route::is('tujuan') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Tujuan Sekolah</a>
                                    </div>
                                </div>

                                <div class="pgrm-sch">
                                    <h5>Program Sekolah</h5>
                                    <div class="pgrm-sch-item">
                                        <a href="/kegiatan-sekolah" class="{{ Route::is('kegiatan') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Kegiatan Sekolah</a>
                                        <a href="/ekstrakurikuler" class="{{ Route::is('ekstra') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Ekstrakurikuler</a>
                                        <a href="/fasilitas-sekolah" class="{{ Route::is('fasilitas') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Fasilitas Sekolah</a>
                                    </div>
                                </div>
                                <div class="pgrm-sch">
                                    <h5>Prestasi Sekolah</h5>
                                    <div class="pgrm-sch-item">
                                        <a href="/prestasi-kabupaten" class="{{ Route::is('pres-kab') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Tingkat Kab/Kota</a>
                                        <a href="/prestasi-provinsi" class="{{ Route::is('pres-prov') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Tingkat Provinsi</a>
                                        <a href="/prestasi-nasional" class="{{ Route::is('pres-nas') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Tingkat Nasional</a>
                                    </div>
                                </div>
                                <div class="dftn-sch">
                                    {{-- Definition YPKP 2 --}}
                                    <div class="dftn-logo-title">
                                        <img src="img/main/logo.png" class="dftn-logo" alt="" />
                                        <h6><span>SD YPKP 2</span> Sentani</h6>
                                    </div>
                                    <div class="dftn-dsch">
                                        <p>SD YPKP 2 Sentani merupakan lembaga pendidikan dasar yang membentuk lulusan menjadi Pemimpin Sholeh, Cerdas, dan Berbakat di Masa Depan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                    <span>
                        <a href="/berita-sekolah" class="{{ Route::is('berita') ? 'btn-nav-link' : 'btn-nav-link collapsed' }}">Berita</a>
                    </span>
                    <span>
                        <a href="#" id="hoverBtnInfo" class="{{ Route::is('pengumuman', 'agenda') ? 'btn-nav-link hover-btn' : 'hover-btn btn-nav-link collapsed' }}">Informasi</a>
                        <div class="card-hover-info" id="card-hover-info">
                            <div class="card-dropdown">
                                <div class="info-sch">
                                    <a href="/pengumuman-sekolah" class="{{ Route::is('pengumuman') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Pengumuman</a>
                                    <a href="/agenda-sekolah" class="{{ Route::is('agenda') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Agenda</a>
                                </div>
                            </div>
                        </div>
                    </span>
                    <span>
                        <a href="#" id="hoverBtnGallery" class="{{ Route::is('foto', 'video') ? 'btn-nav-link hover-btn' : 'hover-btn btn-nav-link collapsed' }}">Galeri</a>
                        <div class="card-hover-gallery" id="card-hover-gallery">
                            <div class="card-dropdown">
                                <div class="info-sch">
                                    <a href="/galeri-foto-sekolah" class="{{ Route::is('foto') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Foto</a>
                                    <a href="/galeri-video-sekolah" class="{{ Route::is('video') ? 'btn-nav-drp' : ' btn-nav-drp coll' }}">Video</a>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="nav-item-list">
                    <button class="nil" id="toggleButton">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/></svg>
                    </button>
                </div>
            </div>
            <div class="header-responsive" id="header-responsive">
                <div class="header-responsive-title">
                    <h5>SD YPKP 2 Sentani</h5>
                </div>
                <div class="nav-items-responsive">
                    <span>
                        <a href="/beranda" class="{{ Route::is('welcome') ? 'btn-nav-drop' : 'btn-nav-drop collapsed' }}">Beranda</a>
                    </span>
                    <span>
                        <a href="" class="{{ Route::is('tentang', 'visimisi', 'sambutan', 'tujuan', 'kegiatan', 'ekstra', 'fasilitas', 'pres-kab', 'pres-prov', 'pres-nas') ? 'btn-nav-drop' : 'btn-nav-drop collapsed' }}">Profil</a>
                        <div class="profil-item-responsive">
                            <h6>Tentang Sekolah</h6>
                            <span>
                                <a href="/tentang-kami" class="{{ Route::is('tentang') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Tentang Kami</a>
                            </span>
                            <span>
                                <a href="/visi-misi-sekolah" class="{{ Route::is('visimisi') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Visi & Misi</a>
                            </span>
                            <span>
                                <a href="/sambutan-kepala-sekolah" class="{{ Route::is('sambutan') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Sambutan Kepala Sekolah</a>
                            </span>
                            <span>
                                <a href="/tujuan-sekolah" class="{{ Route::is('tujuan') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Tujuan Sekolah</a>
                            </span>

                            <h6>Program Sekolah</h6>
                            <span>
                                <a href="/kegiatan-sekolah" class="{{ Route::is('kegiatan') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Kegiatan Sekolah</a>
                            </span>
                            <span>
                                <a href="/ekstrakurikuler" class="{{ Route::is('ekstra') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Ekstrakurikuler</a>
                            </span>
                            <span>
                                <a href="/fasilitas-sekolah" class="{{ Route::is('fasilitas') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Fasilitas Sekolah</a>
                            </span>

                            <h6>Prestasi Sekolah</h6>
                            <span>
                                <a href="/prestasi-kabupaten" class="{{ Route::is('pres-kab') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Tingkat Kab/Kota</a>
                            </span>
                            <span>
                                <a href="/prestasi-provinsi" class="{{ Route::is('pres-prov') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Tingkat Provinsi</a>
                            </span>
                            <span>
                                <a href="/prestasi-nasional" class="{{ Route::is('pres-nas') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Tingkat Nasional</a>
                            </span>
                        </div>
                    </span>
                    <span>
                        <a href="/berita-sekolah" class="{{ Route::is('berita') ? 'btn-nav-drop' : 'btn-nav-drop collapsed' }}">Berita</a>
                    </span>
                    <span>
                        <a href="" class="{{ Route::is('pengumuman', 'agenda') ? 'btn-nav-drop' : 'btn-nav-drop collapsed' }}">Informasi</a>
                        <div class="profil-item-responsive">
                            <span>
                                <a href="/pengumuman-sekolah" class="{{ Route::is('pengumuman') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Pengumuman</a>
                            </span>
                            <span>
                                <a href="/agenda-sekolah" class="{{ Route::is('agenda') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Agenda</a>
                            </span>
                        </div>
                    </span>
                    <span>
                        <a href="" class="{{ Route::is('foto', 'video') ? 'btn-nav-drop' : 'btn-nav-drop collapsed' }}">Galeri</a>
                        <div class="profil-item-responsive">
                            <span>
                                <a href="/galeri-foto-sekolah" class="{{ Route::is('foto') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Foto</a>
                            </span>
                            <span>
                                <a href="/galeri-video-sekolah" class="{{ Route::is('video') ? 'btn-nav-item' : 'btn-nav-item not-act' }}">Video</a>
                            </span>
                        </div>
                    </span>
                </div>
            </div>

        </div>
    </div>

</div>
