<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = 'states';
    protected $primaryKey = "state_id";
    public $incrementing = false;
    protected $guarded = [];
}
