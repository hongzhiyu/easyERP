<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Employee extends Model
{
	
	protected $table = 'employee_info';
	public $timestamps = false;
	protected $fillable = ['ename', 'ework', 'edate', 'eadvatar', 'eresume'];
}