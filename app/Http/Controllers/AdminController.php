<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Internship;
use App\Models\Task;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::count();
        $internships = Internship::count();
        $tasks = Task::count();
        return view('dashboard.admin', compact('users', 'internships', 'tasks'));
    }
}
