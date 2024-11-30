<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    public function users(): BelongsTo
    {
        return $this->belongsTo(UserType::class, 'user_type', 'id');
    }

    public function usersToBorrowRequest(): HasMany
    {
        return $this->hasMany(BorrowRequest::class, 'issuer_id', 'id');
    }

    public function usersToBorrow(): HasMany
    {
        return $this->hasMany(Borrow::class, 'issuer_id', 'id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'remember_token',
        'user_types',
        'idno',
        'address',
        'birthday',
        'is_admin',
        'is_active',
        'telno'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'date',
            'updated_at' => 'date',
            'birthday' => 'date',
            'is_admin' => 'boolean',
            'is_active' => 'boolean'
        ];
    }
}
