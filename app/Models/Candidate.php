<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'election_id',
        'number',
        'name',
        'vision',
        'mission',
        'image_url',
    ];

    /**
     * Get the votes for this candidate.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
