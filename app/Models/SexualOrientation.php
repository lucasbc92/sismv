<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SexualOrientation extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "sexual_orientations";
    protected $primaryKey = "sexual_orientation_id";
    public $incrementing = false;
    protected $guarded = [];
}
