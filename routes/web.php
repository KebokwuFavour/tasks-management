<?php

use App\Http\Controllers\TaskController;
use App\Livewire\CreateTask;
use App\Livewire\EditTask;
use App\Livewire\ListTasks;
use App\Livewire\ViewTask;
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

Route::get('/', function () {
  // return view('welcome');
  return view('auth.login');
});


Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
])->group(function () {
  // Route::get('/dashboard', function () {
  //   // return view('dashboard', ['userTasks' => 'userTasks']);
  //   return view('components.tasks.create-task', [TaskController::class, 'update']);
  // })->name('dashboard');

  Route::get('/create', CreateTask::class)->name('create');
  Route::get('/task_list', ListTasks::class)->name('task-list');
  Route::get('/view-task/{taskId}', ViewTask::class)->name('view-task');
  Route::get('/dashboard', [TaskController::class, 'update'])->name('dashboard');
});
