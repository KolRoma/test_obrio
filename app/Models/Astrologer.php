<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsToMany, HasOne};

class Astrologer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'biography',
    ];

    /**
     * The services that belong to many the astrologer.
     */
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class)->withPivot('prices');
    }

    /**
     * The services that belong to the astrologer.
     */
    public function photo(): HasOne
    {
        return $this->hasOne(Photo::class);
    }
}
