<?php

namespace Database\Factories;

use App\Models\Band;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BandUserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'band_id' => Band::factory(),
            'user_id' => User::factory(),
        ];
    }
}
