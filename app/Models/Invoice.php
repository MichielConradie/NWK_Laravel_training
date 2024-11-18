<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    /** @use HasFactory<\Database\Factories\UserFactory> */
    //use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
    ];

    // protected function casts(): array
    // {
    //     return [
    //         // 'email_verified_at' => 'datetime',
    //         'title' => 'varchar',
    //     ];
    // }
}
