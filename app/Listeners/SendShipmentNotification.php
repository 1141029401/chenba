<?php

namespace App\Listeners;

use App\Events\OrderShipped;

class SendShipmentNotification
{
    /**
     * 创建事件监听器
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 处理事件
     *
     * @param  \App\Events\OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        dd($event->order . "我也是醉了");
        // 使用 $event->order 来访问订单 ...
    }
}