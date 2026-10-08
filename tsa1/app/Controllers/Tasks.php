<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Tasks for Today',
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('task_date', 'ASC')
                ->findAll()
        ];

        return view('partials/header', $data)
            . view('welcome', $data)
            . view('partials/footer');
    }

    public function all()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'All Tasks',
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->findAll()
        ];

        return view('partials/header', $data)
            . view('tasks', $data)
            . view('partials/footer');
    }
}