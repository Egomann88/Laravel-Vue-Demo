<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\CardResource;

class CardAllInfoResource extends CardResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'entryYear' => $this->entryYear,
            'rarity' => $this->rarity,
            'isActive' => $this->isActive,
            'cardImg' => $this->cardImg,
            'specialization' => $this->specialization,
            'age' => $this->age,
            'isSpecial' => $this->isSpecial,
            'biography' => $this->biography,
        ];
    }
}
