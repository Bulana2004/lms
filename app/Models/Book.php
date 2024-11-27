<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

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
