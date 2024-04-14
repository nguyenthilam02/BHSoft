<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Project;
use App\Models\Report;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard()
    {
        $issues = Issue::orderBy('created_at', 'desc')->get();
        $users = User::orderBy('created_at', 'desc')->get();
        $projects = Project::orderBy('created_at', 'desc')->get();
        $reports = Report::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('issues', 'users', 'projects', 'reports'));
    }
}
