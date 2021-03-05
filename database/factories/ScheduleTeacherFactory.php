<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Classer;
use App\Models\ScheduleTeacher;
use App\Models\User;

class ScheduleTeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ScheduleTeacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classer_id' => Classer::factory(),
            'user_id' => User::factory(),
            'start_date' => $this->faker->dateTime(),
            'finish_date' => $this->faker->dateTime(),
            'created_date' => $this->faker->dateTime(),
            'created_by' => $this->faker->dateTime(),
            'last_modified_date' => $this->faker->dateTime(),
            'modified_by' => $this->faker->dateTime(),
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
