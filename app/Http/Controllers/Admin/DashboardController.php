<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // Roles Listing Page
    public function index()
    {
        return view('backend.index');
    }

}