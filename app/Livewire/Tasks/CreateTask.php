<?php

namespace App\Livewire\Tasks;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Task;


class CreateTask extends Component
{
 
    #[Validate('required|string|min:3')]
    public $title = '';
    
    #[Validate('required|string')]
    public $description = '';

    #[Validate('required|in:low,medium,high,urgent')]
    public $priority = 'low';

   
    public function save()
    {
       
        $this->validate();

        Task::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'status'=>'pending',
            'priority'=>$this->priority
        ]);

        $this->reset(['title','description','priority']);

        return redirect('/tasks');

    }

    public function render()
    {
        return view('livewire.tasks.create-task')->title('Create Task');
    }

}
