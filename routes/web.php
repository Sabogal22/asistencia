<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/* Rutas de Inicio */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
/*Ruta de Aprendices*/
Route::get('/asistencia', [App\Http\Controllers\HomeController::class, 'asistencia'])->name('asistencia');
/*Ruta de Inicio*/
Route::get('/aprendices/home', [App\Http\Controllers\HomeController::class, 'aprendices'])->name('aprendices');
/*Ruta de Puntos*/
Route::get('/point', [App\Http\Controllers\HomeController::class, 'point'])->name('point');
/*Ruta de SenaSoft*/
Route::get('/modules/index', [App\Http\Controllers\SenasoftController::class, 'index'])->name('index');
/* Rutas de Cursos */
/* Ruta de Home */
Route::get('courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');
/* Ruta de Agregar */
Route::get('courses/add', [App\Http\Controllers\CourseController::class, 'getCourseAdd'])->name('courses.add');
Route::post('courses/add', [App\Http\Controllers\CourseController::class, 'postCourseAdd'])->name('courses.add');
/* Ruta de Editar */
Route::get('courses/edit/{id}', [App\Http\Controllers\CourseController::class, 'getCourseEdit'])->name('course.edit');
Route::post('courses/edit', [App\Http\Controllers\CourseController::class, 'postCourseEdit'])->name('course.edit');
/* Ruta de Eliminar*/
Route::get('/courses/delete/{id}', [ App\Http\Controllers\CourseController::class, 'getCourseDelete'])->name('course.delete');