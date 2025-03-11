<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    /**
     * NINJA ATTRIBUTES
     * $this->attributes['id'] - int - contains the ninja's primary key (id).
     * $this->attributes['name'] - string - contains the ninja's name.
     * $this->attributes['village'] - string - contains the ninja's village (leaf, mist).
     * $this->attributes['chakra'] - int - contains the amount of chakra the ninja has.
     * $this->attributes['created_at'] - timestamp - contains the computer created date.
     * $this->attributes['updated_at'] - timestamp - contains the computer update date.
     */
    public static function validate($request)
    {
        $request->validate([
            'name' => 'required',
            'village' => 'required|in:leaf,mist',
            'chakra' => 'required|numeric|gte:0',
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getName(): string
    {
        return strtoupper($this->attributes['name']);
    }

    public function setVillage(string $village): void
    {
        $this->attributes['village'] = $village;
    }

    public function getVillage(): string
    {
        return $this->attributes['village'];
    }

    public function setChakra(int $chakra): void
    {
        $this->attributes['chakra'] = $chakra;
    }

    public function getChakra(): int
    {
        return $this->attributes['chakra'];
    }

    public function getCreatedAt(): Carbon
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): Carbon
    {
        return $this->attributes['updated_at'];
    }
}
