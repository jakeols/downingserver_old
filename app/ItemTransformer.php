<?php

namespace App;

use \App\Item;

use League\Fractal;

class ItemTransformer extends Fractal\TransformerAbstract
{
	public function transform(Item $items)
	{
	    return [
        'id'      => $items->id,
        'name'   => $items->name,
        'description'    => $items->description,
        'stock'    => $items->stock,
	    ];
	}
}
