<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* employee 处理数据库
*/
class Order extends Model
{
	
	protected $table = 'order';
	public $timestamps = false;
	protected $fillable = ['id', 'owner', 'delivery_date', 'date', 'orderfile','state'];
}