<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];

    /**
     * The services that belong to the astrologer.
     * 
     * @return BelongsToMany
     */
    public function astrologers(): BelongsToMany
    {
        return $this->belongsToMany(Astrologer::class)->withPivot('prices');
    }
}
