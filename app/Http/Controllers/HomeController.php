<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke(){
        $data['todo']=Todo::all();
        return view('welcome',$data);
    }
}
