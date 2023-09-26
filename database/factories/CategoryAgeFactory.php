<?php

namespace Database\Factories;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryAge>
 *
 */

class CategoryAgeFakerProvider extends Base
{
    protected static $name = [
        '5、6ヶ月(初期)',
        '7、8ヶ月(中期)',
        '9~11ヶ月(後期)',
    ];

    public static function name()
    {
        return static::randomElement(static::$name);
    }
}

class CategoryAgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new CategoryAgeFakerProvider($this->faker));

        return [
            'name' => CategoryAgeFakerProvider::name(),
        ];
    }
}
