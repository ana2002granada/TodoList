<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
    ];

    public function scopeDateFilter(Builder $query, ?string $start, ?string $end): Builder
    {
        return $query->when($start, function ($query) use ($start) {
            $query->where('created_at', '>=', $start);
        })->when($end, function ($query) use ($end) {
            $query->where('updated_at', '<=', $end);
        });
    }

    public function scopeStatusFilter(Builder $query, ?string $status): mixed
    {
        return $query->where('status', $status);
    }
}
