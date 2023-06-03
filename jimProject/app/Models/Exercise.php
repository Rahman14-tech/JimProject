<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Type;

class Exercise extends Model
{
    use HasFactory;
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
    public function tool(): BelongsTo
    {
        return $this->belongsTo(Tool::class);
    }
    public function part(): BelongsTo
    {
        return $this->belongsTo(Part::class);
    }
    public function difficulty(): BelongsTo
    {
        return $this->belongsTo(Difficulty::class);
    }
}