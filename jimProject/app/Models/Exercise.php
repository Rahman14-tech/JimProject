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
        return $this->belongsTo(Type::class, 'Type');
    }
    public function tool(): BelongsTo
    {
        return $this->belongsTo(Tool::class, 'Tool');
    }
    public function part(): BelongsTo
    {
        return $this->belongsTo(Part::class, 'Part');
    }
    public function difficulty(): BelongsTo
    {
        return $this->belongsTo(Difficulty::class, 'Difficulty');
    }
}