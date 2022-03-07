<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sex extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "sexes";
    protected $primaryKey = "sex_id";
    public $incrementing = false;
    protected $guarded = [];
}
