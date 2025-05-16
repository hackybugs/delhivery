<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelhiveryBoy extends Model
{
    use HasFactory;

    protected $table='delhivery_boys';
    
    public function orders(){
        $this->hasMany(Order::class,'delhivery_boy_id');
    }
}
