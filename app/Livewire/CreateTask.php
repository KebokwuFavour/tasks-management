<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class CreateTask extends Component
{
  public $title;
  public $status;
  public $priority;
  public $deadline;
  public $description;

  // method for validating the user data
  private function validateForm($data)
  {
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);

    return $data;
  }

  // method for creating new user'task
  public function create()
  {
    $task = Task::create([
      'title' => $this->validateForm($this->title),
      'status' => $this->validateForm($this->status),
      'priority' => $this->validateForm($this->priority),
      'deadline' => $this->validateForm($this->deadline),
      'description' => $this->validateForm($this->description),
      'user_id' => auth()->id()
    ]);
    $this->js("alert('Task created successfully')");
    return redirect()->to('Create');
  }


  public function render()
  {
    return view('livewire.create-task');
  }
}
