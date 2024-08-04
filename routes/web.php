<?php

use Illuminate\Support\Facades\Route;

/*   User Controller*/
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\GaleriController;
use App\Http\Controllers\User\InfoController;

/*   Auth Controller   */
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;

/*   Admin Controller   */
use App\Http\Controllers\Admin\AboutSchController;
use App\Http\Controllers\Admin\ExtraController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\PerformanceController;
use App\Http\Controllers\Admin\TeacherSchController;
use App\Http\Controllers\Admin\StudentSchController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnounController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Middleware\Teacher;

/****************************************************************/
/*                                                              */
/*                        User Route                            */
/*                                                              */
/****************************************************************/

/*  Dashboard  */

Route::get('/beranda', [HomeController::class, 'index'])->name('welcome');


/*  Profil Tentang Sekolah  */

Route::get('/tentang-kami', [HomeController::class, 'tentang'])->name('tentang');

Route::get('/visi-misi-sekolah', [HomeController::class, 'visimisi'])->name('visimisi');

Route::get('/sambutan-kepala-sekolah', [HomeController::class, 'sambutan'])->name('sambutan');

Route::get('/tujuan-sekolah', [HomeController::class, 'tujuan'])->name('tujuan');


/*  Profil Program Sekolah  */

Route::get('/kegiatan-sekolah', [HomeController::class, 'kegiatan'])->name('kegiatan');

Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('ekstra');

Route::get('/fasilitas-sekolah', [HomeController::class, 'fasilitas'])->name('fasilitas');


/*  Profil Prestasi Sekolah  */

Route::get('/prestasi-kabupaten', [HomeController::class, 'preskab'])->name('pres-kab');

Route::get('/prestasi-provinsi', [HomeController::class, 'presprov'])->name('pres-prov');

Route::get('/prestasi-nasional', [HomeController::class, 'presnas'])->name('pres-nas');


/*  Informasi Sekolah  */

Route::get('/berita-sekolah', [InfoController::class, 'berita'])->name('berita');

Route::get('/pengumuman-sekolah', [InfoController::class, 'pengumuman'])->name('pengumuman');

Route::get('/agenda-sekolah', [InfoController::class, 'agenda'])->name('agenda');


/*  Galeri Sekolah  */

Route::get('/galeri-foto-sekolah', [GaleriController::class, 'foto'])->name('foto');

Route::get('/galeri-video-sekolah', [GaleriController::class, 'video'])->name('video');


Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::post('/login-adm', [LoginController::class, 'login'])->name('login');

});


Route::post('/logout-adm', [LoginController::class, 'logout'])->name('logout');

/****************************************************************/
/*                                                              */
/*                      All Admin Route                         */
/*                                                              */
/****************************************************************/

Route::group(['middleware' => ['teacher']], function () {

    /*  Dashboard  */
    Route::get('/adm-dashboard', [AdminController::class, 'index'])->name('dashboard');



    /*  About School  */
    Route::get('/adm-tentang-sekolah', [AboutSchController::class, 'schabout'])->name('aboutsch');

    Route::post('/adm-update-tentang-sekolah-{slug}', [AboutSchController::class, 'schabout_update']);



    /*  Visi&Misi School  */
    Route::get('/adm-visi-misi', [AboutSchController::class, 'visimisi'])->name('visimisi');

    Route::get('/adm-edit-visi-misi', [AboutSchController::class, 'editvisimisi'])->name('editvisimisi');

    Route::post('/adm-update-visi-misi-{slug}', [AboutSchController::class, 'update_visimisi']);



    /*  School Goals  */
    Route::get('/adm-tujuan-sekolah', [AboutSchController::class, 'schgoals'])->name('goals');

    Route::post('/adm-update-tujuan-sekolah-{slug}', [AboutSchController::class, 'schgoals_update']);



    /*  School Greets  */
    Route::get('/adm-sambutan-kepala-sekolah', [AboutSchController::class, 'schgreets'])->name('greets');

    Route::post('/adm-update-sambutan-kepala-sekolah-{slug}', [AboutSchController::class, 'schgreets_update']);



    /*  School Structure  */
    Route::get('/adm-struktur-sekolah', [AboutSchController::class, 'schstructure'])->name('structure');



    /*  Extracurricular School  */
    Route::get('/adm-extrakurikuler', [ExtraController::class, 'index'])->name('extra');

    Route::get('/adm-tambah-data-extrakurikuler', [ExtraController::class, 'create'])->name('addextra');

    Route::post('/adm-simpan-data-extrakurikuler', [ExtraController::class, 'store']);

    Route::get('/adm-edit-data-extrakurikuler-{slug}', [ExtraController::class, 'edit'])->name('editextra');

    Route::post('/adm-update-data-extrakurikuler-{slug}', [ExtraController::class, 'update']);

    Route::post('/adm-hapus-data-extrakurikuler-{slug}', [ExtraController::class, 'destroy']);

    Route::get('/adm-extrakurikuler-download-pdf', [ExtraController::class, 'downloadPDF']);



    /*  School's Activity  */
    Route::get('/adm-kegiatan-sekolah', [ActivityController::class, 'index'])->name('activity');

    Route::get('/adm-tambah-data-kegiatan', [ActivityController::class, 'create'])->name('addactivity');

    Route::post('/adm-simpan-data-kegiatan', [ActivityController::class, 'store']);

    Route::get('/adm-edit-data-kegiatan-{slug}', [ActivityController::class, 'edit'])->name('editactivity');

    Route::post('/adm-update-data-kegiatan-{slug}', [ActivityController::class, 'update']);

    Route::post('/adm-hapus-data-kegiatan-{slug}', [ActivityController::class, 'destroy']);

    Route::get('/adm-kegiatan-download-pdf', [ActivityController::class, 'downloadPDF']);



    /*  School's Facility  */
    Route::get('/adm-fasilitas-sekolah', [FacilityController::class, 'index'])->name('facility');

    Route::get('/adm-tambah-data-fasilitas', [FacilityController::class, 'create'])->name('addfacility');

    Route::post('/adm-simpan-data-fasilitas', [FacilityController::class, 'store']);

    Route::get('/adm-edit-data-fasilitas-{slug}', [FacilityController::class, 'edit'])->name('editfacility');

    Route::post('/adm-update-data-fasilitas-{slug}', [FacilityController::class, 'update']);

    Route::post('/adm-hapus-data-fasilitas-{slug}', [FacilityController::class, 'destroy']);

    Route::get('/adm-fasilitas-download-pdf', [FacilityController::class, 'downloadPDF']);



    /*  School's News  */
    Route::get('/adm-berita-sekolah', [NewsController::class, 'index'])->name('news');

    Route::get('/adm-tambah-data-berita', [NewsController::class, 'create'])->name('addnews');

    Route::post('/adm-simpan-data-berita', [NewsController::class, 'store']);

    Route::get('/adm-edit-data-berita-{slug}', [NewsController::class, 'edit'])->name('editnews');

    Route::post('/adm-update-data-berita-{slug}', [NewsController::class, 'update'])->name('editnews');

    Route::post('/adm-hapus-data-berita-{slug}', [NewsController::class, 'destroy']);

    Route::get('/adm-berita-download-pdf', [NewsController::class, 'downloadPDF']);



    /*  School's Announs  */
    Route::get('/adm-pengumuman-sekolah', [AnnounController::class, 'index'])->name('announs');

    Route::get('/adm-tambah-data-pengumuman', [AnnounController::class, 'create'])->name('addannouns');

    Route::post('/adm-simpan-data-pengumuman', [AnnounController::class, 'store']);

    Route::get('/adm-edit-data-pengumuman-{slug}', [AnnounController::class, 'edit'])->name('editannouns');

    Route::post('/adm-update-data-pengumuman-{slug}', [AnnounController::class, 'update'])->name('editannouns');

    Route::post('/adm-hapus-data-pengumuman-{slug}', [AnnounController::class, 'destroy']);

    Route::get('/adm-pengumuman-download-pdf', [AnnounController::class, 'downloadPDF']);



    /*  School's Agenda  */
    Route::get('/adm-agenda-sekolah', [AgendaController::class, 'index'])->name('agenda');

    Route::get('/adm-tambah-data-agenda', [AgendaController::class, 'create'])->name('addagenda');

    Route::post('/adm-simpan-data-agenda', [AgendaController::class, 'store']);

    Route::get('/adm-edit-data-agenda-{slug}', [AgendaController::class, 'edit'])->name('editagenda');

    Route::post('/adm-update-data-agenda-{slug}', [AgendaController::class, 'update'])->name('editagenda');

    Route::post('/adm-hapus-data-agenda-{slug}', [AgendaController::class, 'destroy']);

    Route::get('/adm-agenda-download-pdf', [AgendaController::class, 'downloadPDF']);



    /*  School's Performance  */
    Route::get('/adm-prestasi-sekolah', [PerformanceController::class, 'index'])->name('performance');

    Route::get('/adm-tambah-prestasi-sekolah', [PerformanceController::class, 'create'])->name('addperformance');

    Route::post('/adm-simpan-data-prestasi', [PerformanceController::class, 'store']);

    Route::get('/adm-edit-data-prestasi-{slug}', [PerformanceController::class, 'edit'])->name('editperformance');

    Route::post('/adm-update-data-prestasi-{slug}', [PerformanceController::class, 'update'])->name('editperformance');

    Route::post('/adm-hapus-data-prestasi-{slug}', [PerformanceController::class, 'destroy']);

    Route::get('/adm-prestasi-download-pdf', [PerformanceController::class, 'downloadPDF']);



    /*  School's Gallery Photo  */
    Route::get('/adm-galeri-foto', [PhotoController::class, 'index'])->name('photo');

    Route::get('/adm-tambah-data-galeri-foto', [PhotoController::class, 'create'])->name('addphoto');

    Route::post('/adm-simpan-data-galeri-foto', [PhotoController::class, 'store']);

    Route::get('/adm-edit-data-galeri-foto-{slug}', [PhotoController::class, 'edit'])->name('editphoto');

    Route::post('/adm-update-data-galeri-foto-{slug}', [PhotoController::class, 'update'])->name('editphoto');

    Route::post('/adm-hapus-data-galeri-foto-{slug}', [PhotoController::class, 'destroy']);



    /*  School's Gallery Video  */
    Route::get('/adm-galeri-video', [VideoController::class, 'index'])->name('video');

    Route::get('/adm-tambah-data-galeri-video', [VideoController::class, 'create'])->name('addvideo');

    Route::post('/adm-simpan-data-galeri-video', [VideoController::class, 'store']);

    Route::get('/adm-edit-data-galeri-video-{slug}', [VideoController::class, 'edit'])->name('editvideo');

    Route::post('/adm-update-data-galeri-video-{slug}', [VideoController::class, 'update'])->name('editvideo');

    Route::post('/adm-hapus-data-galeri-video-{slug}', [VideoController::class, 'destroy']);



    /*   User Profile   */
    Route::get('/adm-profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/adm-pengaturan-akun', [ProfileController::class, 'edit'])->name('editprofile');

    Route::post('/adm-update-profile-{username}', [ProfileController::class, 'update']);

    Route::post('/adm-update-password-{username}', [ProfileController::class, 'passupdate']);
});



/****************************************************************/
/*                                                              */
/*                        Admin Route                           */
/*                                                              */
/****************************************************************/


Route::middleware(['admin'])->group(function () {
    /*  Teacher's Account  */
    Route::get('/adm-akun-guru', [AccountController::class, 'index'])->name('accteach');

    Route::get('/adm-tambah-akun-guru', [AccountController::class, 'create'])->name('addacc');

    Route::post('/adm-store-data-akun', [AccountController::class, 'store']);

    Route::post('/adm-hapus-data-akun-{username}', [AccountController::class, 'destroy']);

    //Teacher's Data
    Route::get('/adm-data-guru', [TeacherSchController::class, 'index'])->name('tcrdata');

    Route::get('/adm-tambah-data-guru', [TeacherSchController::class, 'create'])->name('addtcrdata');

    Route::post('/adm-store-data-guru', [TeacherSchController::class, 'store']);

    Route::get('/adm-edit-data-guru-{slug}', [TeacherSchController::class, 'edit'])->name('edittcrdata');

    Route::post('/adm-update-data-guru-{slug}', [TeacherSchController::class, 'update']);

    Route::post('/adm-hapus-data-guru-{slug}', [TeacherSchController::class, 'destroy']);

    Route::get('/adm-data-guru-download-pdf', [TeacherSchController::class, 'downloadPDF']);
});



/****************************************************************/
/*                                                              */
/*                      Teacher Route                           */
/*                                                              */
/****************************************************************/
Route::middleware(['teacher'])->group(function () {

    //Student's Data
    Route::get('/adm-data-siswa-kelas-1', [StudentSchController::class, 'stddata1'])->name('stddata1');

    Route::get('/adm-data-siswa-kelas-2', [StudentSchController::class, 'stddata2'])->name('stddata2');

    Route::get('/adm-data-siswa-kelas-3', [StudentSchController::class, 'stddata3'])->name('stddata3');

    Route::get('/adm-data-siswa-kelas-4', [StudentSchController::class, 'stddata4'])->name('stddata4');

    Route::get('/adm-data-siswa-kelas-5', [StudentSchController::class, 'stddata5'])->name('stddata5');

    Route::get('/adm-data-siswa-kelas-6', [StudentSchController::class, 'stddata6'])->name('stddata6');

    Route::get('/adm-data-siswa', [StudentSchController::class, 'index'])->name('stddata');

    Route::get('/adm-tambah-data-siswa', [StudentSchController::class, 'create'])->name('stdadddata');

    Route::post('/adm-store-data-siswa', [StudentSchController::class, 'store']);

    Route::get('/adm-edit-data-siswa-{slug}', [StudentSchController::class, 'edit'])->name('editstddata');

    Route::post('/adm-update-data-siswa-{slug}', [StudentSchController::class, 'update']);

    Route::post('/adm-delete-data-siswa-{slug}', [StudentSchController::class, 'destroy']);

    Route::get('/adm-data-siswa-download-{class}-{category}', [StudentSchController::class, 'downloadPDF']);
});
