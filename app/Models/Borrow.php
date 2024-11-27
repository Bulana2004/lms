<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowFactory> */
    use HasFactory;

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
