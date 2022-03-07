<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnvironmentLocalization extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'environment_localizations';
    protected $primaryKey = "environment_localization_id";
    public $incrementing = false;
    protected $guarded = [];
}
