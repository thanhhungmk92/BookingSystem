<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Faculty extends Model
{
	protected $table ="faculty";
	protected $primaryKey = 'id';
    
    public function getList(){
    	return DB::table('faculty')->get();
    }
}
