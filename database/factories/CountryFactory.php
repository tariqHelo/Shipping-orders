<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $countries = Country::inRandomOrder()
         ->limit(1)
         ->first(['id']);

        $status = ['active', 'draft' , 'hidden'];

        $name = $this->faker->name();
         
        return [
            
            'english_name' => $faker->randomElement(['England','Wales','Scotland','Northern Ireland','Southern
            Ireland','United Kingdom']),
            'country_code' => 'GB',
            'town' => $faker->boolean(50) ? $faker->city() : null,

        ];
    }
}
