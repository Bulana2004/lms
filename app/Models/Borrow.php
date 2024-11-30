<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Borrow extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowFactory> */
    use HasFactory;

    public function borrowUsers(): BelongsTo
    {
        return $this->belongsTo(User::class, 'issuer_id', 'id');
    }

    public function borrowBooks(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public $timestamps = false;

    protected $fillable = [
        'books_id',
        'issuer_id',
        'borrow_date',
        'handover_date'
    ];

    protected function casts() : array
    {
        return [
            'borrow_date' => 'date',
            'handover_date' => 'date'
        ];
    }
}
