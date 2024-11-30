<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public function books(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function bookToBorrowRequest(): HasMany
    {
        return $this->hasMany(BorrowRequest::class, 'book_id', 'id');
    }

    public function booksToBorrow(): HasMany
    {
        return $this->hasMany(Borrow::class, 'book_id', 'id');
    }

    protected $fillable = [
        'category_id',
        'isbn_no',
        'description',
        'price',
        'created_at',
        'deleted_at',
        'img_src',
        'qty'
    ];

    protected function casts(): array
    {
        return [
            'price' => 'float',
        ];
    }
}
