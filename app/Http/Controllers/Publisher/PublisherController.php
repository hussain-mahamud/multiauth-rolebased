<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
     function index(){
    	return view('dashboard.publisher.index');
    }
    function profile(){
    	return view('dashboard.publisher.profile');
    }
}
