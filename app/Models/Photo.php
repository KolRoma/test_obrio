<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'astrologer_id', 'mime_type', 'path',
    ];

    /**
     * The services that belong to the astrologer.
     */
    public function Astrologer(): BelongsTo
    {
        return $this->belongsTo(Astrologer::class);
    }
}
