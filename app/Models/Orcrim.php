<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orcrim extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "orcrims";
    protected $primaryKey = "orcrim_id";
    public $incrementing = false;
    protected $guarded = [];
}
