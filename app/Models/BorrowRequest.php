<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRequest extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowRequestFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'books_id',
        'issuer_id'
    ];
}
