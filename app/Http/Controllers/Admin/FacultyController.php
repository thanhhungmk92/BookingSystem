<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faculty;

class FacultyController extends Controller
{
    public function __construct(Faculty $mFaculty){
        return $this->mFaculty = $mFaculty;
    }

    public function index(){
        $objItems = $this->mFaculty->getList();
    	return view('admin.faculty.index',compact('objItems'));
    }
    public function getAdd(){
    	return view('admin.faculty.add');
    }
    public function postAdd(){
    
    	
    }
}
