<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IdentificationType extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'identification_types';
    protected $primaryKey = "identification_type_id";
    public $incrementing = false;
    protected $guarded = [];
}
