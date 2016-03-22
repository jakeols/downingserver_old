<?php

namespace App;

use \App\Item;

use League\Fractal;

class UserTransformer extends Fractal\TransformerAbstract
{
	public function transform(User $users)
	{
	    return [
        'id'      => $users->id,
        'name'   => $users->name,
        'email' => $users->email,
	    ];
	}
}
