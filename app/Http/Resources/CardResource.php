<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
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
