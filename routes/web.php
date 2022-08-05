<?php

use App\Http\Livewire\CourseStatus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PruebitasController;
use App\Http\Controllers\CompetenceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('cursos', [CourseController::class, 'index'])->name('courses.index');
Route::get('curso/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('estatus-curso/{course}', CourseStatus::class)->middleware('auth')->name('course.status');

Route::get('competencias', [CompetenceController::class, 'index'])->name('competences.index');
Route::get('competencia/{competence}', [CompetenceController::class, 'show'])->name('competence.show');
Route::get('estatus-competencia/{competence}', [CompetenceController::class, 'status'])->name('competence.status');

Route::post('course/{course}/enrolled', [CourseController::class, 'enrolled'])->middleware('auth')->name('course.enrolled');
Route::post('competence/{competence}/enrolled', [CompetenceController::class, 'enrolled'])->middleware('auth')->name('competence.enrolled');

Route::get('pruebitas', [PruebitasController::class, 'index'])->name('pruebitas');
