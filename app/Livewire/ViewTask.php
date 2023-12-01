<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class ViewTask extends Component
{
  public $details;

  public function mount($taskId)
  {
    $this->details = Task::findorFail($taskId);
    // dd($this->details);
  }

  public function render()
  {
    return view('livewire.view-task', ['taskDetails' => $this->details]);
  }
}
