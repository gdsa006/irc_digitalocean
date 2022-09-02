<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class OtherPagesController extends Controller
{
    public function about(){
        return View::make('about');
    }

    public function termsConditions(){
        return View::make('toc');
    }
}
