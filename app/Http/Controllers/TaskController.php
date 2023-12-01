<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

  public function update()
  {
    // currently authenticated user tasks
    $userTasks = Task::where('user_id', Auth::id())->get();

    // tasks completed
    $completed = $userTasks->where('status', 'completed');

    // tasks not started
    $notStarted = $userTasks->where('status', 'not started');

    // tasks in progress
    $inProgress = $userTasks->where('status', 'in progress');

    // tasks due today
    $deadlineAsToday = $userTasks->where('deadline', date("Y-m-d"));

    // completed tasks due today
    $completedToday = $userTasks->where('status', 'completed')
      ->where('deadline', date("Y-m-d"));

    // uncompleted tasks due today
    $todayNotComp = $deadlineAsToday->where('status', '!=', 'completed');
    $todayNotComp1 = $todayNotComp->take(4);

    // uncompleted future tasks
    $currentDate = Carbon::now()->toDateString();
    $futureTasks = $userTasks->where('status', '!=', 'completed')
      ->where('deadline', '>', $currentDate);
    $futureTasksDisp = $futureTasks->take(2);
    $futureTasksDisp3 = $futureTasks->take(3);
    $futureTasksDisp4 = $futureTasks->take(4);

    // return the view
    return view('components.tasks.index', ['userTasks' => $userTasks, 'completed' => $completed, 'notStarted' => $notStarted, 'inProgress' => $inProgress, 'deadlineAsToday' => $deadlineAsToday, 'completedToday' => $completedToday, 'todayNC' => $todayNotComp, 'todayNCDetail' => $todayNotComp1, 'futureTasks' => $futureTasks, 'futureTasksDisp' => $futureTasksDisp, 'futureTasksDisp3' => $futureTasksDisp3, 'futureTasksDisp4' => $futureTasksDisp4]);
  }
}
