<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserType extends Model
{
    use HasFactory;

    public function UserTypesToUsers(): HasMany
    {
        return $this->hasMany(User::class, 'user_types', 'id');
    }
}
