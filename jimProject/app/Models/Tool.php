<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tool extends Model
{
    use HasFactory;
    public function Exercise(): HasMany
    {
        return $this->hasMany(Difficulty::class, 'Tool', 'id');
    }
}