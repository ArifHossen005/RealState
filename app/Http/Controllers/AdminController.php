<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashbaord()
    {
        return view('admin.admin_dashboard');
    }
}
