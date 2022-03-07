<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnvironmentQualification extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'environment_qualifications';
    protected $primaryKey = "environment_qualification_id";
    public $incrementing = false;
    protected $guarded = [];
    use HasFactory;
}
