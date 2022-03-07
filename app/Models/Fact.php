<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fact extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "facts";
    protected $primaryKey = "fact_id";
    public $incrementing = false;
    protected $guarded = [];

    public function occurrences(): BelongsToMany
    {
        return $this->belongsToMany(Occurrence::class, 'occurrence_fact', 'fact_id', 'occurrence_id');
    }
}
