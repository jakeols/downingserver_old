<?php

namespace App;

use \App\Order;

use League\Fractal;

class OrderTransformer extends Fractal\TransformerAbstract
{
	public function transform(Order $orders)
	{
	    return [
        'id'      => $orders->id,
        'name'   => $orders->user_id,
        'email' => $orders->item_id,
	    ];
	}
}
