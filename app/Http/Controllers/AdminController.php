<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }

    public function calendar(): View
    {
        return view('admin.calendar');
    }

    public function sweetAlert(): View
    {
        return view('admin.sweet-alert');
    }

    public function datatable(): View
    {
        return view('admin.datatable');
    }

    public function formElements(): View
    {
        return view('admin.form-elements');
    }

    public function login(): View
    {
        return view('admin.login');
    }
}
