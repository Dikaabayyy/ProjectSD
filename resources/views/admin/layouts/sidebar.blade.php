 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-heading">Website</li>

      <li class="nav-item">
        <a class="{{ Route::is('dashboard') ? 'nav-link' : 'nav-link collapsed' }}" href="/adm-dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="{{ Route::is('aboutsch', 'visimisi', 'editvisimisi' , 'goals', 'greets', 'structure') ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#profilesch-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Profil Sekolah</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="profilesch-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/adm-tentang-sekolah" class="{{ Route::is('aboutsch') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Tentang Sekolah</span>
            </a>
          </li>
          <li>
            <a href="/adm-visi-misi" class="{{ Route::is('visimisi', 'editvisimisi') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Visi & Misi</span>
            </a>
          </li>
          <li>
            <a href="/adm-tujuan-sekolah" class="{{ Route::is('goals') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Tujuan Sekolah</span>
            </a>
          </li>
          <li>
            <a href="/adm-sambutan-kepala-sekolah" class="{{ Route::is('greets') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Sambutan Kepala Sekolah</span>
            </a>
          </li>
          <li>
            <a href="/adm-struktur-sekolah" class="{{ Route::is('structure') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Struktur Organisasi</span>
            </a>
          </li>
        </ul>
      </li><!-- End School Profile Nav -->

      <li class="nav-item">
        <a class="{{ Route::is('extra', 'addextra', 'editextra', 'activity', 'addactivity', 'editactivity', 'facility', 'addfacility', 'editfacility') ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#programs-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Program Sekolah</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="programs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/adm-extrakurikuler" class="{{ Route::is('extra', 'addextra', 'editextra') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Ekstrakurikuler</span>
            </a>
          </li>
          <li>
            <a href="/adm-kegiatan-sekolah" class="{{ Route::is('activity', 'addactivity', 'editactivity' ) ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Kegiatan Sekolah</span>
            </a>
          </li>
          <li>
            <a href="/adm-fasilitas-sekolah" class="{{ Route::is('facility', 'addfacility', 'editfacility') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Fasilitas Sekolah</span>
            </a>
          </li>
        </ul>
      </li><!-- End School Programs Nav -->

      <li class="nav-item">
        <a class="{{ Route::is('performance', 'addperformance', 'editperformance') ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#performance-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-trophy"></i><span>Prestasi Sekolah</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="performance-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/adm-prestasi-sekolah" class="{{ Route::is('performance', 'editperformance') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Data Prestasi Sekolah</span>
            </a>
          </li>
          <li>
            <a href="/adm-tambah-prestasi-sekolah" class="{{ Route::is('addperformance') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Tambah Data Prestasi</span>
            </a>
          </li>
        </ul>
      </li><!-- End School Performance Nav -->

      {{-- <li class="nav-item">
        <a class="{{ Route::is('committee', 'actcommittee') ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#committee-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-archive"></i><span>Komite</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="committee-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/adm-struktur-komite" class="{{ Route::is('committee') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Struktur Komite</span>
            </a>
          </li>
          <li>
            <a href="/adm-kegiatan-komite" class="{{ Route::is('actcommittee') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Kegiatan Komite</span>
            </a>
          </li>
        </ul>
      </li><!-- End School Committee Nav --> --}}

      <li class="nav-item">
        <a class="{{ Route::is('news', 'addnews', 'editnews', 'announs', 'addannouns', 'editannouns', 'agenda', 'addagenda', 'editagenda') ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#news-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="news-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/adm-berita-sekolah" class="{{ Route::is('news', 'addnews', 'editnews') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Berita</span>
            </a>
          </li>
          <li>
            <a href="/adm-pengumuman-sekolah" class="{{ Route::is('announs', 'addannouns', 'editannouns') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Pengumuman</span>
            </a>
          </li>
          <li>
            <a href="/adm-agenda-sekolah" class="{{ Route::is('agenda', 'addagenda', 'editagenda') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Agenda Sekolah</span>
            </a>
          </li>
        </ul>
      </li><!-- End Information Nav -->

      <li class="nav-item">
        <a class="{{ Route::is('photo', 'addphoto', 'editphoto', 'video', 'addvideo', 'editvideo') ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#gallery-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-images"></i><span>Galeri</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="gallery-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/adm-galeri-foto" class="{{ Route::is('photo', 'addphoto', 'editphoto') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Foto</span>
            </a>
          </li>
          <li>
            <a href="/adm-galeri-video" class="{{ Route::is( 'video', 'addvideo', 'editvideo') ? 'nav-link' : 'nav-link collapsed' }}">
              <i class="bi bi-circle-fill"></i><span>Video</span>
            </a>
          </li>
        </ul>
      </li><!-- End Gallery Nav -->



    @auth
        @if (Auth::user()->role == 'Admin')

            <li class="nav-heading">Admin</li>
            <li class="nav-item">
                <a class="{{ Route::is('accteach', 'addacc') ? 'nav-link' : 'nav-link collapsed' }}" href="/adm-akun-guru">
                    <i class="bi bi-person-badge"></i><span>Data Akun</span>
                </a>
            </li><!-- End Teacher's Data Nav -->

            <li class="nav-item">
                <a class="{{ Route::is('tcrdata', 'edittcrdata', 'addtcrdata') ? 'nav-link' : 'nav-link collapsed' }}" href="/adm-data-guru">
                    <i class="bi bi-person-vcard"></i><span>Data Guru</span>
                </a>
            </li><!-- End Teacher's Data Nav -->
        @endif
    @endauth


      <li class="nav-heading">Guru</li>

      <li class="nav-item">
        <a class="{{ Route::is('stddata', 'stddata1', 'stddata2', 'stddata3', 'stddata4', 'stddata5', 'stddata6', 'stdadddata' ,'editstddata') ? 'nav-link' : 'nav-link collapsed' }}" href="/adm-data-siswa">
            <i class="bi bi-person-lines-fill"></i><span>Data Siswa</span>
        </a>
      </li><!-- End Students's Data Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="{{ Route::is('profile') ? 'nav-link' : 'nav-link collapsed' }}" href="/adm-profile">
          <i class="bi bi-person"></i>
          <span>Profil Saya</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="{{ Route::is('editprofile') ? 'nav-link' : 'nav-link collapsed' }}" href="/adm-pengaturan-akun">
          <i class="bi bi-gear"></i>
          <span>Pengaturan Akun</span>
        </a>
      </li><!-- End Settings Profile Page Nav -->

      <li class="nav-item">
        <button class="nav-link collapsed" data-bs-toggle="modal" data-bs-target="#logOut">
          <i class="bi bi-box-arrow-right"></i>
          <span>Keluar</span>
        </button>
      </li><!-- End Logout Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->
