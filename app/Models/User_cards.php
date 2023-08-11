<?php

namespace App\Models;

use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_cards extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function cards() {
        return $this->belongsToMany(Card::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'card_id',
        'quantity',
    ];
}
