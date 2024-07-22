<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutSchController;
use App\Http\Controllers\TeacherSchController;
use App\Http\Controllers\StudentSchController;


use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
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

Route::get('/adm-edit-data-extrakurikuler-{slug}', [ProgramController::class, 'editextra'])->name('editextra');

Route::post('/adm-update-data-extrakurikuler-{slug}', [ProgramController::class, 'updateextra']);


/*  School's Activity  */
Route::get('/adm-kegiatan-sekolah', [ProgramController::class, 'activity'])->name('activity');

Route::get('/adm-edit-data-kegiatan-{slug}', [ProgramController::class, 'editactivity'])->name('editactivity');

Route::post('/adm-update-data-kegiatan-{slug}', [ProgramController::class, 'updateactivity']);



//Teacher's Data
Route::get('/adm-data-guru', [TeacherSchController::class, 'tcrdata'])->name('tcrdata');

Route::get('/adm-edit-data-guru', [TeacherSchController::class, 'tcreditdata'])->name('tcrdata');

Route::get('/adm-tambah-data-guru', [TeacherSchController::class, 'tcradddata'])->name('tcrdata');


//Student's Data
Route::get('/adm-tambah-data-siswa', [StudentSchController::class, 'stdadddata'])->name('stddata');

Route::get('/adm-data-siwa-kelas-1', [StudentSchController::class, 'stddata1'])->name('stddata1');

Route::get('/adm-data-siwa-kelas-2', [StudentSchController::class, 'stddata2'])->name('stddata2');

Route::get('/adm-data-siwa-kelas-3', [StudentSchController::class, 'stddata3'])->name('stddata3');

Route::get('/adm-data-siwa-kelas-4', [StudentSchController::class, 'stddata4'])->name('stddata4');

Route::get('/adm-data-siwa-kelas-5', [StudentSchController::class, 'stddata5'])->name('stddata5');

Route::get('/adm-data-siwa-kelas-6', [StudentSchController::class, 'stddata6'])->name('stddata6');
