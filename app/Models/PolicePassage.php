<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PolicePassage extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "police_passages";
    protected $primaryKey = "police_passage_id";
    public $incrementing = false;
    protected $guarded = [];
}
