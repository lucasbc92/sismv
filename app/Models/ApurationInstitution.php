<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApurationInstitution extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'apuration_institutions';
    protected $primaryKey = "apuration_institution_id";
    public $incrementing = false;
    protected $guarded = [];
}
