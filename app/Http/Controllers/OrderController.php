<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/**
* 
*/
class OrderController extends Controller
{
	
	public function index ( )
	{
		$orders = Order::paginate(10);
		foreach($orders as $order)
		{
			$order['date'] = date('Y-m-d',$order['date']);
			$order['delivery_date'] = date('Y-m-d',$order['delivery_date']);
		}
		return view('order.index',[
			'orders' => $orders
		]);
	}

	public function detail ( Request $request, $id)
	{
		return view( 'order.detail', [
			'id' =>$id
		] );
	}

	public function search ( )
	{
		return view( 'order.search');
	}
	//新增订单
	public function add (Request $request)
	{
		if( $request->isMethod('GET') )
		{

			return view('order.add');
		}
		if( $request->isMethod('POST') )
		{
			//验证

			$this->validate($request, [ 
				'Order.id'=>'required',
				'Order.owner'=>'required',
				'Order.date'=>'required',
				'Order.delivery_date'=>'required',
				]);

			$Or = new Order( );
			$Product = new Product( );

			$order = $request->input('Order');
			$orderfile = $request->file('orderfile');
			$order['date'] = strtotime($order['date']);
			$order['delivery_date'] = strtotime($order['delivery_date']);

			$products = $request->file('product_file');

			dd($products);
			
			// if($orderfile->isValid())
			// {
			// 	//扩展名
			// 	$ext = $orderfile->getClientOriginalExtension();
			// 	//临时绝对路径
			// 	$realPath = $orderfile->getRealPath();

			// 	$ordername =  '订单'.'_'.$order['id'].'_'.date('Y').uniqid().'.'.$ext;

			// 	Storage::disk('order')->put($ordername, file_get_contents($realPath));

			// 	$order['orderfile'] = $ordername;

			// }
			// else
			// {
			// 	return redirect()->back()->withInput();
			// }

			// //订单产品
			// //
			// for ($i=0; $i < count($products); $i++) 
			// { 
			// 	$products[$i]['order_id'] = $order['id'];

			// 	$Product::create($products[$i]);

			// }
			// //数据库创建行
			// if($Or::create($order))
			// {
			// 	return redirect('order/index')->with('success', '添加成功-'.$order['id']);
			// }else
			// {
			// 	return redirect()->back()->withInput();
			// }


		}
	}

	//删除员工信息
	public function delete( $id )
	{
		$Or = Order::find($id);

		if( $Or->delete() )
		{
			Storage::disk('order')->delete($Or->orderfile);
			return redirect('order/index')->with('success', '删除订单'.$Or->id.'成功啦！');
		}
	}

	public function delivery( )
	{
		return view('order.delivery');
	}
	
}