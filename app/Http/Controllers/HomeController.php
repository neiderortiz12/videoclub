<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CatalogController;

//use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome()
    {
        //return view('home');
        return redirect()->action([CatalogController::class, 'getIndex']);
    }
}
