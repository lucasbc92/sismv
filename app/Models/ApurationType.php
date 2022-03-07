<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApurationType extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'apuration_types';
    protected $primaryKey = "apuration_type_id";
    public $incrementing = false;
    protected $guarded = [];
}
