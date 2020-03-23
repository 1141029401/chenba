<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\OrderShipped;
use App\Http\Controllers\Controller;
//use App\Order;

class OrderController extends Controller
{
    /**
     * 为给定的订单发货
     *
     * @param  int  $orderId
     * @return Response
     */
    public function ship($orderId)
    {

    	//dd($orderId);

        //$order = Order::findOrFail($orderId);

        // 订单发货逻辑 ...

        event(new OrderShipped($orderId));
    }
}
