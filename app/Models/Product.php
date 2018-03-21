<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* employee 处理数据库
*/
class Product extends Model
{
	
	protected $table = 'order_product';
	public $timestamps = false;
	protected $fillable = ['order_id', 'type', 'name', 'product_id','number','price'];
}