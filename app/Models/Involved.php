<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Involved extends Model
{
    use HasFactory; 
    use SoftDeletes;
    
    protected $table = "involved";
    protected $guarded = [];

    public function occurrences(): BelongsToMany
    {
        return $this->belongsToMany(Occurrence::class, 'occurrences_involved', 'involved_id', 'occurrence_id');
    }

    public function police_passage_types(): BelongsToMany
    {
        return $this->belongsToMany(PolicePassageType::class, 'involved_police_passage_types', 'involved_id', 'police_passage_type_id');
    }
}
