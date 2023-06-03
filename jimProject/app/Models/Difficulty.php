<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Difficulty extends Model
{
    use HasFactory;
    public function User(): HasMany
    {
        return $this->hasMany(Difficulty::class, 'LevelConsideration', 'id');
    }
    public function Exercise(): HasMany
    {
        return $this->hasMany(Exercise::class, 'Difficulty', 'id');
    }
}