<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* company 处理数据库
*/
class Company extends Model
{
	
	protected $table = 'company_info';
	public $timestamps = false;
	protected $fillable = ['id', 'name', 'work', 'date', 'avatar', 'resume','birth_date', 'sex',];
}