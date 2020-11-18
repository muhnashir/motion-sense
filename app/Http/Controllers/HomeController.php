<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $response = http::get('https://arusip-c14cd.firebaseio.com/data1.json');
        $data= $response->json();

        return view('index',compact('data'));
    }
}
