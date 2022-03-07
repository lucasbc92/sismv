<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motivation extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "motivations";
    protected $primaryKey = "motivation_id";
    public $incrementing = false;
    protected $guarded = [];

    public function occurrences(): BelongsToMany
    {
        return $this->belongsToMany(Occurrence::class, 'occurrence_motivation', 'motivation_id', 'occurrence_id');
    }
}
