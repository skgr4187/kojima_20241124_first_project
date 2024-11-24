<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Admin::class;

    public function definition()
    {
        return [
            // 'date' => $this->faker->date,
            'name' => $this->faker->name,
            'work_start' => $this->faker->time,
            'work_fin' => $this->faker->time,
            'break_time' => $this->faker->time,
            'work_time' => $this->faker->time,
        ];
    }
}
