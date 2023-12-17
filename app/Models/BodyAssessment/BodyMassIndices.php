<?php

namespace App\Models\BodyAssessment;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BodyMassIndices extends Model
{
    use HasFactory;

    protected $fillable = [
        'bmi',
        'user_id',
    ];    

    public function User(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
