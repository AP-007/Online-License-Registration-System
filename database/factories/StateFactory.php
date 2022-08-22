<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = State::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $states = [
          'Province 1',
          'Province 2',
          'Bagmati Province',
          'Gandaki Province',
          'Lumbini Province',
          'Karnali Province',
          'Sudurpashchim Province',
        ];
        return [
            'name' => $this->faker->unique()->randomElement($states)
        ];
    }
}
