<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participation extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "participations";
    protected $primaryKey = "participation_id";
    public $incrementing = false;
    protected $guarded = [];
}