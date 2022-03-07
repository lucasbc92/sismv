<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CivilStatus extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'civil_statuses';
    protected $primaryKey = "civil_status_id";
    public $incrementing = false;
    protected $guarded = [];
}
