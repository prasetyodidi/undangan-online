<?php

namespace Database\Factories;

use App\Models\Testimoni;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimoniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimoni::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invitation_id' => mt_rand(1, 3),
            'feedback' => $this->faker->paragraph()
        ];
    }
}
