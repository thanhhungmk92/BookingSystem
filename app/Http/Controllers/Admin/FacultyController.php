<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacultyController extends Controller
{
    public function index(){
    	return view('admin.faculty.index');
    }
    public function getAdd(){
    	return view('admin.faculty.add');
    }
    public function postAdd(){
    
    	
    }
}
