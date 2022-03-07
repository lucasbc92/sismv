<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnvironmentClassification extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'environment_classifications';
    protected $primaryKey = "environment_classification_id";
    public $incrementing = false;
    protected $guarded = [];
}
