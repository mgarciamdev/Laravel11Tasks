<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use function auth;

class TaskComponent extends Component
{

    public $tasks = [];
    public $title;
    public $description;
    public $modal = false;

    public function mount()
    {
        if (Auth::check()) {
            $this->tasks = Task::where('user_id', Auth::id())->get();
        } else {
            // Handle the case where the user is not authenticated
            $this->tasks = [];
        }
    }

    public function render()
    {
        return view('livewire.task-component');
    }

    public function clearFields()
    {
        $this->title = '';
        $this->description = '';
    }

    public function createTask()
    {
        $this->clearFields();
        $this->modal = true;
    }
}
