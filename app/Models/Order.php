<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'email', 'astrologer_service_id',
    ];

    /**
     * The order that belong to the astrologer's service.
     * 
     * @return BelongsTo
     */
    public function astrologerService(): BelongsTo
    {
        return $this->belongsTo(AstrologerService::class);
    }
}
