<?php

use App\Exports\SuratExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\SiderController;
use App\Http\Controllers\Admin\KategoriContorller;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\AgendaController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Frontend
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/visimisi', [ProfileController::class, 'visimisi'])->name('visimisi');
Route::get('/selayang-pandang', [ProfileController::class, 'selayang_pandang'])->name('selayang_pandang');
Route::get('/peta', [ProfileController::class, 'peta'])->name('peta');
Route::get('/pertanian', [BeritaController::class, 'index'])->name('berita');



Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('letter/index', [App\Http\Controllers\Admin\SuratController::class, 'index'])->name('letter.index');
    Route::get('letter/edit/{letter}', [App\Http\Controllers\Admin\SuratController::class, 'edit'])->name('letter.edit');
    Route::post('letter/update/{letter}', [App\Http\Controllers\Admin\SuratController::class, 'update'])->name('letter.update');
    Route::get('letter/destroy/{id}', [App\Http\Controllers\Admin\SuratController::class, 'destroy'])->name('letter.destroy');
    Route::post('letter/store', [App\Http\Controllers\Admin\SuratController::class, 'store'])->name('letter.store');
    Route::get('letter/create', [App\Http\Controllers\Admin\SuratController::class, 'create'])->name('letter.create');

    Route::get('user/index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    Route::get('user/edit/{user}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
    Route::post('user/update/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
    Route::get('user/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');
    Route::post('user/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');
    Route::get('user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');
    //Router berita
    Route::group(['middleware' => 'check.admin'], function () {
        Route::get('/backend/dashboard', [DashboardController::class, 'dahsboard_berita'])->name('berita.dashboard');
        Route::get('backend/berita/kategori', [KategoriContorller::class, 'page_index_kategori'])->name('berita.kategori');
        Route::post('backend/berita/kategori/create', [KategoriContorller::class, 'page_store_kategori'])->name('berita.kategori.store');
        Route::post('backend/berita/kategori/update/{id}', [KategoriContorller::class, 'update_page'])->name('berita.kategori.update');
        Route::post('backend/berita/kategori/destroy/{id}', [KategoriContorller::class, 'page_destroy'])->name('berita.kategori.destroy');
        Route::get('/backend/silder/index', [SiderController::class, 'index'])->name('backend.silder.index');
        Route::post('/backend/silder/store', [SiderController::class, 'store'])->name('backend.silder.store');
        Route::post('silder/update-status', [SiderController::class, 'updateStatus'])->name('silder.updateStatus');
        Route::get('/backend/visimisi/index', [VisiMisiController::class, 'index'])->name('backend.visimisi.index');
        Route::get('/backend/visimisi/edit/{id}', [VisiMisiController::class, 'edit'])->name('backend.visimisi.edit');
        Route::put('backend/visimisi/update/{id}', [VisiMisiController::class, 'update'])->name('backend.visimisi.update');
        Route::get('backend/agenda/index', [App\Http\Controllers\Admin\AgendaController::class, 'index'])->name('backend.agenda.index');
        Route::post('backend/agenda/store', [App\Http\Controllers\Admin\AgendaController::class, 'store'])->name('backend.agenda.store');
        Route::get('backned/berita/index', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('backend.berita.index');
        Route::get('backend/berita/create', [App\Http\Controllers\Admin\BeritaController::class, 'create'])->name('backend.berita.create');
        Route::post('backend/berita/store', [App\Http\Controllers\Admin\BeritaController::class, 'store'])->name('backend.berita.store');
        Route::post('berita/generate-slug', [App\Http\Controllers\Admin\BeritaController::class,'generateSlug'])->name('backend.berita.generate-slug');
        Route::get('backend/profile/index', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('backend.profile.index');
        Route::put('backend/profile/update/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('backend.profile.update');
    });

});
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');
    Route::post('/disposisi', [App\Http\Controllers\Admin\SuratController::class, 'disposisi'])->name('disposisi');
    Route::get('/terima/{id}', [App\Http\Controllers\Admin\SuratController::class, 'terima'])->name('letter.terima');
    Route::get('/tolak/{id}', [App\Http\Controllers\Admin\SuratController::class, 'tolak'])->name('letter.tolak');
    Route::get('pdf-surat', [PDFController::class,'getSurat']);
    Route::get('excel-surat', function () {
        return Excel::download(new SuratExport, 'surat.xlsx');
    });
    // Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


// Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth']],function(){
//     Route::name('admin.')->group(function(){
//     Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');
//     Route::get('user/index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
//     Route::get('user/edit/{user}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.edit');
//     Route::post('user/update/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('user.update');
//     Route::get('user/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('user.destroy');
//     Route::post('user/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('user.store');
//     Route::get('user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create');
// });
// });


//Router berita
// Route::get('/auth/login/profile', [LoginController::class, 'showLoginForm'])->name('login.profile');
// Route::middleware(['auth','check.admin'])->group(function () {
//     Route::get('/backend/dashboard', [DashboardController::class, 'dahsboard_berita'])->name('berita.dashboard');
// });
