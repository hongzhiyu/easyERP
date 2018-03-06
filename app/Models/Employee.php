<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* employee 处理数据库
*/
class Employee extends Model
{
	
	protected $table = 'employee_info';
	public $timestamps = false;
	protected $fillable = ['id', 'name', 'work', 'date', 'avatar', 'resume','birth_date', 'sex',];
}