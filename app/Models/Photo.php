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
     * The photo that belong to the astrologer.
     * 
     * @return BelongsTo
     */
    public function Astrologer(): BelongsTo
    {
        return $this->belongsTo(Astrologer::class);
    }
}
