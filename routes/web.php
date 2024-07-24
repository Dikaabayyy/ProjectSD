<?php

use Illuminate\Support\Facades\Route;

/*   User Controller*/

/*   Auth Controller   */
use App\Http\Controllers\LoginController;

/*   Admin Controller   */
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutSchController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TeacherSchController;
use App\Http\Controllers\StudentSchController;
use App\Http\Controllers\AdminController;



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
Route::get('/adm-extrakurikuler', [ProgramController::class, 'extra'])->name('extra');

Route::get('/adm-tambah-data-extrakurikuler', [ProgramController::class, 'addextra'])->name('addextra');

Route::post('/adm-simpan-data-extrakurikuler', [ProgramController::class, 'storeextra']);

Route::get('/adm-edit-data-extrakurikuler-{slug}', [ProgramController::class, 'editextra'])->name('editextra');

Route::post('/adm-update-data-extrakurikuler-{slug}', [ProgramController::class, 'updateextra']);

Route::post('/adm-hapus-data-extrakurikuler-{slug}', [ProgramController::class, 'deleteextra']);


/*  School's Activity  */
Route::get('/adm-kegiatan-sekolah', [ProgramController::class, 'activity'])->name('activity');

Route::get('/adm-tambah-data-kegiatan', [ProgramController::class, 'addactivity'])->name('addactivity');

Route::post('/adm-simpan-data-kegiatan', [ProgramController::class, 'storeactivity']);

Route::get('/adm-edit-data-kegiatan-{slug}', [ProgramController::class, 'editactivity'])->name('editactivity');

Route::post('/adm-update-data-kegiatan-{slug}', [ProgramController::class, 'updateactivity']);

Route::post('/adm-hapus-data-kegiatan-{slug}', [ProgramController::class, 'deleteactivity']);


/*  School's Facility  */
Route::get('/adm-fasilitas-sekolah', [ProgramController::class, 'facility'])->name('facility');

Route::get('/adm-tambah-data-fasilitas', [ProgramController::class, 'addfacility'])->name('addfacility');

Route::post('/adm-simpan-data-fasilitas', [ProgramController::class, 'storefacility'])->name('addfacility');

Route::get('/adm-edit-data-fasilitas-{slug}', [ProgramController::class, 'editfacility'])->name('editfacility');

Route::post('/adm-update-data-fasilitas-{slug}', [ProgramController::class, 'updatefacility']);

Route::post('/adm-hapus-data-fasilitas-{slug}', [ProgramController::class, 'deletefacility']);



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
