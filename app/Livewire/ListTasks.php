<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ListTasks extends Component
{

  use WithPagination;

  // properties for editing/updating tasks
  public $editTask = false;
  public $selectedTask = null;

  // properties for deleting tasks
  public $deleteTask = false;
  public $task2del = null;

  // properties for updating/editing the task
  public $selectedTaskInfo;
  public $title;
  public $status;
  public $priority;
  public $deadline;
  public $description;

  // properties for sorting tasks
  #[Url()]
  public $sortedTasks = null;

  // properties for searching tasks
  // #[Url()]
  public $search = "";
  public $searchResult = "";

  // Method for viewing task button
  public function viewBtn($taskId)
  {
    $selectedTask = Task::findorFail($taskId);
    return view('livewire.view-task', ['tasks' => $selectedTask]);
  }

  // Method for editing task button
  public function editBtn($taskId)
  {
    $this->editTask = true;
    $this->selectedTask = Task::findorFail($taskId);

    $toEdit = $this->selectedTask;

    $this->title = $toEdit->title;
    $this->status = $toEdit->status;
    $this->priority = $toEdit->priority;
    $this->deadline = $toEdit->deadline;
    $this->description = $toEdit->description;
  }

  // method for canceling the task editing/updating process/modal
  public function cancelEditBtn()
  {
    $this->editTask = false;
  }

  // method for updating/editing task
  public function update($selectedTaskId)
  {
    $this->selectedTaskInfo = Task::findOrFail($selectedTaskId);

    Task::where('id', $selectedTaskId)->update(['title' => $this->title, 'status' => $this->status, 'priority' => $this->priority, 'deadline' => $this->deadline, 'description' => $this->description]);
    $this->js("alert('Task Successfully Updated')");
    return redirect()->to('task_list');
  }

  // Method for task deleting button
  public function deleteBtn($id)
  {
    $this->deleteTask = true;
    $this->task2del = Task::findOrFail($id);
  }

  // Method for deleting task
  public function delete($id)
  {
    Task::destroy($id);
    $this->js("alert('Task Deleted Successfully')");
    return redirect()->to('task_list');
  }

  // Method for Canceling delete process and modal
  public function cancelDel()
  {
    $this->deleteTask = false;
  }

  // // Method for sorting by title
  // public function titleSort()
  // {
  //   $id = Auth::id();
  //   $this->sortedTasks = Task::where('user_id', $id)->orderBy('title', 'desc')->get();
  // }

  // // Method for sorting by deadline
  // public function deadlineSort()
  // {
  //   $id = Auth::id();
  //   $this->sortedTasks = Task::where('user_id', $id)->orderBy('deadline', 'desc')->get();
  // }

  // // Method for sorting by priority
  // public function prioritySort()
  // {
  //   $id = Auth::id();
  //   $this->sortedTasks = Task::where('user_id', $id)->orderBy('priority', 'desc')->get();
  // }

  // // Method for sorting by status
  // public function statusSort()
  // {
  //   $id = Auth::id();
  //   $this->sortedTasks = Task::where('user_id', $id)->orderBy('status')->get();
  // }

  // Method for searching tasks
  public function Search()
  {
    $this->searchResult = Task::where('user_id', Auth::id())
      ->where(function ($query) {
        $query->where('title', 'like', '%' . $this->search . '%')
          ->orWhere('status', 'like', '%' . $this->search . '%')
          ->orWhere('priority', 'like', '%' . $this->search . '%')
          ->orderBy('created_at');
      })->get();
  }

  public function render()
  {
    $tasks = Task::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(4);
    return view('livewire.list-tasks', ['tasks' => $tasks, 'n' => 1]);
  }
}
