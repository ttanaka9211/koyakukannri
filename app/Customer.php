<?php

namespace App;

use App\Events\KramerInComming;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $dispatchesEvents =[
        'created' => KramerInComming::class,
    ];
    
    protected $guarded = [];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function customerLogs()
    {
        return $this->hasMany(customerLogs::class);
    }
}
