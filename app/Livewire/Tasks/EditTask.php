<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Models\Task;

class EditTask extends Component
{

    public $task;
    public $title;
    public $description;
    public $priority;
    public $status;
    

    public function mount($id){
        $this->task = $task = Task::findOrFail($id);
        $this->title = $this->task->title;
        $this->description = $this->task->description;
        $this->priority = $this->task->priority;
        $this->status = $this->task->status;
    }

    public function render()
    {
        return view('livewire.tasks.edit-task')
            ->with('task', $this->task)
            ->title("Edit Task - {$this->task->title}");
    }
    

    public function save(){

        $this->task->update([
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'status' => $this->status
        ]);

        return redirect("/tasks");
    }
}
