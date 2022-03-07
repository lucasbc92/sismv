<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnvironmentType extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'environment_types';
    protected $primaryKey = "environment_type_id";
    public $incrementing = false;
    protected $guarded = [];
}
