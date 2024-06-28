<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use App\Models\Task;

class ShowTasks extends Component
{

    public $tasks;


    public function render()
    {

       $this->tasks = Task::all();

        return view('livewire.tasks.show-tasks')->title("Tasks");
    }

    public function create ()
    {
        return redirect('/tasks/new');
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();
    }

    public function edit($id){

        return redirect('/tasks/'.$id);
    }
}
