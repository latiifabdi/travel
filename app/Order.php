<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function tour()
    {
        return $this->belongsTo(Tours::class, 'tour_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
