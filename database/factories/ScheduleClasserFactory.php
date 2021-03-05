<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Classer;
use App\Models\ScheduleClasser;
use App\Models\User;

class ScheduleClasserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ScheduleClasser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'Classer_id' => Classer::factory(),
            'enrollment_date' => $this->faker->dateTime(),
            'withdrawl_date' => $this->faker->dateTime(),
            'withdrawl_id' => $this->faker->numberBetween(-10000, 10000),
            'created_date' => $this->faker->dateTime(),
            'created_by' => $this->faker->dateTime(),
            'last_modified_date' => $this->faker->dateTime(),
            'modified_by' => $this->faker->dateTime(),
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
