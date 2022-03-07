<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthorSituation extends Model
{
    use HasFactory; 
    use SoftDeletes;    
    protected $table = 'author_situations';
    protected $primaryKey = "author_situation_id";
    public $incrementing = false;
    protected $guarded = [];    
}
