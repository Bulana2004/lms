<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BorrowRequest extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowRequestFactory> */
    use HasFactory;

    public function borrowRequestUsers(): BelongsTo
    {
        return $this->belongsTo(User::class, 'issuer_id', 'id');
    }

    public function borrowRequestBooks(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public $timestamps = false;

    protected $fillable = [
        'books_id',
        'issuer_id'
    ];
}