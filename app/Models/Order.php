<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $table ='orders';
    
    public function delhiveryBoys(){
        $this->belongsTo(DelhiveryBoy::class,'delhivery_boy_id');
    }
}
