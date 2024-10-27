<?php

use App\Http\Controllers\about;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',  [about::class, 'index'])->name('home');
Route::get('about',  [about::class, 'about'])->name('about');
Route::get('equipe',  [about::class, 'team'])->name('equipe');
Route::get('services',  [about::class, 'services'])->name('services');
Route::get('domaines',  [about::class, 'domaines'])->name('domaines');
Route::get('projets',  [about::class, 'projet'])->name('projets');
Route::get('publications',  [about::class, 'blog'])->name(name: 'publications');
Route::get('contact',  [about::class, 'contact'])->name('contact');

Route::post('addNewMessage',  [about::class, 'addNewMessage'])->name('addNewMessage');

Route::get('detailEquipe/{slug}',  [about::class, 'detailTeam'])->name('detailEquipe');
Route::get('detailService/{slug}',  [about::class, 'detailService'])->name('detailService');
Route::get('detailDomaine/{slug}',  [about::class, 'detailDomaine'])->name('detailDomaine');
Route::get('detailProjet/{slug}',  [about::class, 'detailProjet'])->name('detailProjet');
Route::get('detailBlog/{slug}',  [about::class, 'detailBlog'])->name('detailBlog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/symlink', action: function () {
    return view('symlink');
})->name('generate_symlink');
require __DIR__ . '/auth.php';
