<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  

    public function reviewPerformance()
    {
        return view('employee.review_performance');
    }

    public function referTask()
    {
        return view('employee.refer_task');
    }

    public function suggestChanges()
    {
        return view('employee.suggest_changes');
    }

    public function viewNotifications()
    {
        return view('employee.view_notifications');
    }

    public function editProfile()
    {
        return view('employee.edit_profile');
    }

}
