<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
  
    public function submitReports()
    {
        return view('employee.submit_report');
    }
    



}
