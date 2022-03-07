<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mean extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "means";
    protected $primaryKey = "mean_id";
    public $incrementing = false;
    protected $guarded = [];

    public function occurrences(): BelongsToMany
    {
        return $this->belongsToMany(Occurrence::class, 'occurrence_mean', 'mean_id', 'occurrence_id');
    }
}
