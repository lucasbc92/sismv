<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationLevel extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'education_levels';
    protected $primaryKey = "education_level_id";
    public $incrementing = false;
    protected $guarded = [];
}
