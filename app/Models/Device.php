<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    public function deviceType(){
        return $this->belongsTo(DeviceType::class,'device_types_id');
    }
}
