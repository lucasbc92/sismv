<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Race extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "races";
    protected $primaryKey = "race_id";
    public $incrementing = false;
    protected $guarded = [];
}
