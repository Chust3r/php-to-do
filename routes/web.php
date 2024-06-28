<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Livewire\Tasks\CreateTask;
use App\Livewire\Tasks\ShowTasks;
use App\Livewire\Tasks\EditTask;

Route::get("/tasks/new",CreateTask::class);

Route::get("/tasks",ShowTasks::class);

Route::get("/tasks/{id}",EditTask::class);