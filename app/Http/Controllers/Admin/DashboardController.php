<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return "sei nella dashboard";

    }

    public function profile()
    {
        return "pagina profile backoffice";
    }
}