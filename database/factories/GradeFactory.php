<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Grade;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'previous_grade_id' => Grade::factory(),
            'next_grade_id' => Grade::factory(),
            'created_date' => $this->faker->dateTime(),
            'created_by' => $this->faker->dateTime(),
            'last_modified_date' => $this->faker->dateTime(),
            'modified_by' => $this->faker->dateTime(),
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
