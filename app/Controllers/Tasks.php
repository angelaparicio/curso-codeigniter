<?php namespace App\Controllers;

use App\Models\TasksModel;
use CodeIgniter\Controller;

class Tasks extends Controller
{
    public function index()
    {
        $model = new TasksModel();

        $data['tasks'] = $model->getTasks();

        echo view('tasks/index', $data);
    }

   
}