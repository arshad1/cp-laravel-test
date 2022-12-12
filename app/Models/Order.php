<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class, 'CUST_CODE', 'id');
    }

    public function agent(){
        return $this->belongsTo(Agent::class, 'AGENT_CODE','id');
    }
}
