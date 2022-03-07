<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeminicideRelationshipType extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'feminicide_relationship_types';
    protected $primaryKey = "feminicide_relationship_type_id";
    public $incrementing = false;
    protected $guarded = [];
}
