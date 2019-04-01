<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*   public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    */
    
    public function index() {
		return view('pages.index');
    }

    public function innovation() {
		return view('innovation.index');
    }
    
    public function allInOne() {
		return view('innovation.all-in-one');
    }
    
    public function pqr() {
		return view('innovation.power-quality-rating');
    }

}
