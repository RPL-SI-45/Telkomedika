<?php

namespace App\Http\Controllers;

use App\Models\profiladmin;
use Illuminate\Http\Request;

class profiladminController extends Controller
{
    public function index(){
        $profiladmin = profiladmin::all();
          return view('profile',compact(['profiladmin']));
         
    }



}