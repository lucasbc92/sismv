<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "zones";
    protected $primaryKey = "zone_id";
    public $incrementing = false;
    protected $guarded = [];
}
