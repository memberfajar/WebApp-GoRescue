<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function about(){
    	$name = 'Fajar Rizki Hadifirmansyah';
    	$data= [];
    	$data['first'] = 'Fajar Rizki';
    	$data['last'] = 'Hadifirmansyah';
    	return view('pages.about', compact('name'));
    }
}
