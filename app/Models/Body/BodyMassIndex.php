<?php

namespace App\Models\Body;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BodyMassIndex extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'height',
        'weight',
        'bmi',
        'user_id',
    ];    

    public function User(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
