<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'customer_id', 'ship_id' , 'pay_id' , 'total', 'status'];

    public function Customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function Shipping(){
        return $this->belongsTo(Shipping::class, 'ship_id');
    }

    public function Payment(){
        return $this->belongsTo(Payment::class, 'pay_id');
    }
}
