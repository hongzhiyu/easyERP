<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* employee 处理数据库
*/
class Blueprint extends Model
{
	
	protected $table = 'blueprint';
	public $timestamps = false;
	protected $fillable = ['id', 'name', 'type', 'date', 'bpfile'];
}