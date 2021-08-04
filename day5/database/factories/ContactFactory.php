<?php

namespace Database\Factories;

use App\Models\contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_depan' => $this->faker->name(),
            'nama_belakang' => $this->faker->name(),
            'nomor_telepon_ponsel' => $this->faker->phoneNumber(),
            'nomor_telepon_rumah' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'deskripsi' => $this->faker->paragraph(),
        ];
    }
}
