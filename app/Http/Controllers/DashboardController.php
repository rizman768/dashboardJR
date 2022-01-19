<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function pendapatan(){
        return view('Dashboards.dashboard1');
    }

    public function menunggak(){
        return view('Dashboards.dashboard2');
    }

    public function menunggak2(){
        return view('Dashboards.dashboard6');
    }

    public function kecelakaan(){
        return view('Dashboards.dashboard3');
    }

    public function kecelakaan2(){
        return view('Dashboards.dashboard5');
    }

    public function download(){
        return view('Dashboards.dashboard4');
    }
}
