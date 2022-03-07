<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeminicideHasChildren extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'feminicide_has_children';
    protected $primaryKey = "feminicide_has_children_id";
    public $incrementing = false;
    protected $guarded = [];
}
