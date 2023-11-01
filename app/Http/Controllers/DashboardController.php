<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class DashboardController extends Controller
{
    protected $info, $infos=[];

    public function dashboard()
    {
        return view('back.admin');
    }
    //

}
