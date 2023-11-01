<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    protected $about, $abouts=[];

    public function home()
    {
        $this->abouts =About::all();
        return view('front.home.index',[
            'abouts' => $this->abouts,
        ]);
    }
     public function inner()
    {
        return view('front.pages.inner');
    }
     public function portfolioDetails()
    {
        return view('front.pages.details');
    }

    //
}
