<?php

use Illuminate\Support\Facades\Route;

/*   User Controller*/

/*   Auth Controller   */
use App\Http\Controllers\LoginController;

/*   Admin Controller   */
use App\Http\Controllers\AboutSchController;
use App\Http\Controllers\Admin\ExtraController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\TeacherSchController;
use App\Http\Controllers\Admin\StudentSchController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Auth\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');




/****************************************************************/
/*                                                              */
/*                        Admin Route                           */
/*                                                              */
/****************************************************************/


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


/*  School's Activity  */
Route::get('/adm-kegiatan-sekolah', [ActivityController::class, 'index'])->name('activity');

Route::get('/adm-tambah-data-kegiatan', [ActivityController::class, 'create'])->name('addactivity');

Route::post('/adm-simpan-data-kegiatan', [ActivityController::class, 'store']);

Route::get('/adm-edit-data-kegiatan-{slug}', [ActivityController::class, 'edit'])->name('editactivity');

Route::post('/adm-update-data-kegiatan-{slug}', [ActivityController::class, 'update']);

Route::post('/adm-hapus-data-kegiatan-{slug}', [ActivityController::class, 'destroy']);


/*  School's Facility  */
Route::get('/adm-fasilitas-sekolah', [FacilityController::class, 'index'])->name('facility');

Route::get('/adm-tambah-data-fasilitas', [FacilityController::class, 'create'])->name('addfacility');

Route::post('/adm-simpan-data-fasilitas', [FacilityController::class, 'store']);

Route::get('/adm-edit-data-fasilitas-{slug}', [FacilityController::class, 'edit'])->name('editfacility');

Route::post('/adm-update-data-fasilitas-{slug}', [FacilityController::class, 'update']);

Route::post('/adm-hapus-data-fasilitas-{slug}', [FacilityController::class, 'destroy']);



/*  School's News  */
Route::get('/adm-berita', [NewsController::class, 'index'])->name('news');

Route::get('/adm-tambah-data-berita', [NewsController::class, 'create'])->name('addnews');

Route::post('/adm-simpan-data-berita', [NewsController::class, 'store']);

Route::get('/adm-edit-data-berita-{slug}', [NewsController::class, 'edit'])->name('editnews');

Route::post('/adm-update-data-berita-{slug}', [NewsController::class, 'update'])->name('editnews');

Route::post('/adm-hapus-data-news-{slug}', [NewsController::class, 'destroy']);



/*  School's Agenda  */
Route::get('/adm-agenda-sekolah', [AgendaController::class, 'index'])->name('agenda');

Route::get('/adm-tambah-data-agenda', [AgendaController::class, 'create'])->name('addagenda');

Route::post('/adm-simpan-data-agenda', [AgendaController::class, 'store']);

Route::get('/adm-edit-data-agenda-{slug}', [AgendaController::class, 'edit'])->name('editagenda');

Route::post('/adm-update-data-agenda-{slug}', [AgendaController::class, 'update'])->name('editagenda');

Route::post('/adm-hapus-data-agenda-{slug}', [AgendaController::class, 'destroy']);



/*  School's Gallery  */
Route::get('/adm-galeri-foto', [GalleryController::class, 'index'])->name('photo');

Route::get('/adm-tambah-data-galeri-foto', [GalleryController::class, 'create'])->name('addphoto');

Route::post('/adm-simpan-data-galeri-foto', [GalleryController::class, 'store']);

Route::get('/adm-edit-data-galeri-foto-{slug}', [GalleryController::class, 'edit'])->name('editphoto');

Route::post('/adm-update-data-galeri-foto-{slug}', [GalleryController::class, 'update'])->name('editphoto');

Route::post('/adm-hapus-data-galeri-foto-{slug}', [GalleryController::class, 'destroy']);



/*  Teacher's Account  */
Route::get('/adm-akun-guru', [AccountController::class, 'index'])->name('accteach');

Route::get('/adm-tambah-akun-guru', [AccountController::class, 'create'])->name('addacc');

Route::post('/adm-store-data-akun', [AccountController::class, 'store']);

Route::post('/adm-hapus-data-akun-{username}', [AccountController::class, 'destroy']);





//Teacher's Data
Route::get('/adm-data-guru', [TeacherSchController::class, 'index'])->name('tcrdata');

Route::get('/adm-edit-data-guru', [TeacherSchController::class, 'edit'])->name('edittcrdata');

Route::get('/adm-tambah-data-guru', [TeacherSchController::class, 'create'])->name('addtcrdata');


//Student's Data
Route::get('/adm-tambah-data-siswa', [StudentSchController::class, 'stdadddata'])->name('stddata');

Route::get('/adm-data-siwa-kelas-1', [StudentSchController::class, 'stddata1'])->name('stddata1');

Route::get('/adm-data-siwa-kelas-2', [StudentSchController::class, 'stddata2'])->name('stddata2');

Route::get('/adm-data-siwa-kelas-3', [StudentSchController::class, 'stddata3'])->name('stddata3');

Route::get('/adm-data-siwa-kelas-4', [StudentSchController::class, 'stddata4'])->name('stddata4');

Route::get('/adm-data-siwa-kelas-5', [StudentSchController::class, 'stddata5'])->name('stddata5');

Route::get('/adm-data-siwa-kelas-6', [StudentSchController::class, 'stddata6'])->name('stddata6');



/*   Admin's Profile   */
Route::get('/adm-profile', [ProfileController::class, 'index'])->name('profile');
