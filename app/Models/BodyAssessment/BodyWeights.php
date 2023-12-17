<?php

namespace App\Models\BodyAssessment;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BodyWeights extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'height',
        'user_id',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
