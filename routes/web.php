<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PidatoController;
use App\Http\Controllers\KhutbahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', [AppController::class, 'index']);

Route::get('/blog', [AppController::class, 'blog']);

Route::get('/blog/{slug}', [AppController::class, 'isiBlog']);

Route::get('/khutbah', [AppController::class, 'khutbah']);

Route::get('/khutbah/{slug}', [AppController::class, 'isiKhutbah']);

Route::get('/pidato', [AppController::class, 'pidato']);

Route::get('/pidato/{slug}', [AppController::class, 'isiPidato']);

Route::get('/foto', [AppController::class, 'foto']);

Route::get('/videos', [AppController::class, 'videos']);

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register/ashdakhdjdk', [AuthController::class, 'registerView']);
Route::post('/registerr', [AuthController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blogD', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blogD/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blogD/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blogD/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::put('/blogD/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blogD/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

Route::get('/khutbahD', [KhutbahController::class, 'index'])->name('khutbah')->middleware('auth');
Route::get('/khutbahD/create', [KhutbahController::class, 'create'])->name('khutbah.create')->middleware('auth');
Route::post('/khutbahD/store', [KhutbahController::class, 'store'])->name('khutbah.store')->middleware('auth');
Route::get('/khutbahD/edit/{id}', [KhutbahController::class, 'edit'])->name('khutbah.edit')->middleware('auth');
Route::put('/khutbahD/update/{id}', [KhutbahController::class, 'update'])->name('khutbah.update')->middleware('auth');
Route::post('/khutbahD/destroy/{id}', [KhutbahController::class, 'destroy'])->name('khutbah.destroy')->middleware('auth');

Route::get('/pidatoD', [PidatoController::class, 'index'])->name('pidato')->middleware('auth');
Route::get('/pidatoD/create', [PidatoController::class, 'create'])->name('pidato.create')->middleware('auth');
Route::post('/pidatoD/store', [PidatoController::class, 'store'])->name('pidato.store')->middleware('auth');
Route::get('/pidatoD/edit/{id}', [PidatoController::class, 'edit'])->name('pidato.edit')->middleware('auth');
Route::put('/pidatoD/update/{id}', [PidatoController::class, 'update'])->name('pidato.update')->middleware('auth');
Route::post('/pidatoD/destroy/{id}', [PidatoController::class, 'destroy'])->name('pidato.destroy')->middleware('auth');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('auth');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update')->middleware('auth');
Route::post('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy')->middleware('auth');

Route::get('/register/success', [RegisterController::class, 'registerSuccess'])->name('register.success');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index')->middleware('auth');
Route::get('/register/create', [RegisterController::class, 'create'])->name('register.create');
Route::get('/register/user/create', [RegisterController::class, 'createUser'])->name('register.create.user');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
Route::post('/register/user/store', [RegisterController::class, 'storeUser'])->name('register.store.user');
Route::get('/register/edit/{id}', [RegisterController::class, 'edit'])->name('register.edit');
Route::put('/register/update/{id}', [RegisterController::class, 'update'])->name('register.update');
Route::delete('/register/destroy/{id}', [RegisterController::class, 'destroy'])->name('register.destroy');
Route::get('/register/{id}', [RegisterController::class, 'show'])->name('register.show')->middleware('auth');
Route::get('/export', [RegisterController::class, 'export'])->name('register.export')->middleware('auth');
Route::get('/pendaftaran', function () {
    return view('register.pendaftaran');
});

Route::get('/download', [RegisterController::class, 'download'])->name('download.pdf');

Route::get('/stream/video/{filename}', function ($filename) {
    $path = storage_path('app/public/video/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->stream(function () use ($path) {
        $stream = fopen($path, 'rb');
        fpassthru($stream);
        fclose($stream);
    }, 200, [
        'Content-Type' => 'video/mp4',
        'Accept-Ranges' => 'bytes',
        'Cache-Control' => 'public, max-age=31536000',
    ]);
});
