<?php

namespace App\Models;

use App\Models\User_cards;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public function users_cards() {
        return $this->belongsToMany(User_cards::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'entryYear',
        'rarity',
        'isActive',
        'cardImg',
        'specialization',
        'age',
        'isSpecial',
        'biography',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'isActive' => true,
        'cardImg' => 'none.jpg',
        'isSpecial' => false,
    ];
}
