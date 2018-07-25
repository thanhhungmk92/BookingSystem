<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Doctor extends Model
{
    protected $table ="doctors";
	protected $primaryKey = 'id';
    
    public function getList(){
    	return DB::table('doctors')->get();
    }
}
