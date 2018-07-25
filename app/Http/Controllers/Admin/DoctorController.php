<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;

class DoctorController extends Controller
{
	public function __construct(Doctor $mDoctor){
        return $this->mDoctor = $mDoctor;
    }
    public function index(){
    	$objItems = $this->mDoctor->getList();
    	return view('admin.doctor.index',compact('objItems'));
    }

}
