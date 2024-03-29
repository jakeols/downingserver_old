<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'items';

  public function user()
  {
    return $this->belongsTo('App\User');
  }
  public function items()
  {
    return $this->hasMany('App/Item');
  }
}
