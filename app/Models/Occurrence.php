<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occurrence extends Model
{
    use HasFactory; 
    use SoftDeletes;
    
    protected $table = "occurrences";
    protected $guarded = [];

    /**
     * The facts that belong to the Occurrence
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function facts(): BelongsToMany
    {
        return $this->belongsToMany(Fact::class, 'occurrences_facts', 'occurrence_id', 'fact_id');
    }
    
    /**
     * The motivations that belong to the Occurrence
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function motivations(): BelongsToMany
    {
        return $this->belongsToMany(Motivation::class, 'occurrences_motivations', 'occurrence_id', 'motivation_id');
    }
    
    /**
     * The means that belong to the Occurrence
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function means(): BelongsToMany
    {
        return $this->belongsToMany(Mean::class, 'occurrences_means', 'occurrence_id', 'mean_id');
    } 

    public function involved(): BelongsToMany
    {
        return $this->belongsToMany(Involved::class, 'occurrences_involved', 'occurrence_id', 'involved_id');
    }  
}
