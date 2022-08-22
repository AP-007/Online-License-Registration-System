<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = [
            [
                'symbol' => 'A',
                'name' => 'Motorcycle, Scooter, Moped'
            ],
            [
                'symbol' => 'B',
                'name' => 'Car, jeep, Delivery Van'
            ],[
                'symbol' => 'C',
                'name' => 'Tempo, Autorickshaw'
            ],[
                'symbol' => 'C1',
                'name' => 'ERickshaw'
            ],[
                'symbol' => 'D',
                'name' => 'Powertiller'
            ],[
                'symbol' => 'E',
                'name' => 'Tractor, Trailer Tractor (Low Bed)'
            ],[
                'symbol' => 'H',
                'name' => 'Road Toller, Dozer'
            ],[
                'symbol' => 'H1',
                'name' => 'DOZER'
            ],[
                'symbol' => 'H2',
                'name' => 'ROAD ROLLER'
            ],[
                'symbol' => 'I',
                'name' => 'Crane, Fire brigade, Loader'
            ],[
                'symbol' => 'I1',
                'name' => 'CRANE, MOBILE CRANE, CRANE MOUNTED TRUCK'
            ],[
                'symbol' => 'I2',
                'name' => 'FIRE BRIGADE'
            ],[
                'symbol' => 'I3',
                'name' => 'LOADER'
            ],[
                'symbol' => 'J1',
                'name' => 'EXCAVATOR'
            ],[
                'symbol' => 'J2',
                'name' => 'BACKHOE LOADER'
            ],[
                'symbol' => 'J3',
                'name' => 'GRADER'
            ],[
                'symbol' => 'J4',
                'name' => 'FORKLIFT'
            ],[
                'symbol' => 'J5',
                'name' => 'Other'
            ],[
                'symbol' => 'K',
                'name' => 'Scooter, Moped'
            ],
        ];
        return [
            //
        ];
    }
}
