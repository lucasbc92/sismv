<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profession extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "professions";
    protected $primaryKey = "profession_id";
    public $incrementing = false;
    protected $guarded = [];
}
