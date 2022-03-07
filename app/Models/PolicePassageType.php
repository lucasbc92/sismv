<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PolicePassageType extends Model
{
    use HasFactory; 
    use SoftDeletes;
    protected $table = "police_passage_types";
    protected $primaryKey = "police_passage_type_id";
    public $incrementing = false;
    protected $guarded = [];

    public function involved(): BelongsToMany
    {
        return $this->belongsToMany(Involved::class, 'involved_police_passage_type', 'police_passage_type_id', 'involved_id');
    }
}
