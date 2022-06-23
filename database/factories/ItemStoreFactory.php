<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemStore>
 */
class ItemStoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => Item::all()->random()->id,
            'store_id' => Store::all()->random()->id,
            'quantity' => $this->faker->numberbetween(1, 100),
        ];
    }
}
