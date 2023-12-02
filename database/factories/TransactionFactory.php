<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\DataKamar;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $kamar = DataKamar::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'kamar_id' => $kamar->id,
            'nama_pemesan' => $this->faker->name,
            'durasi_sewa' => $this->faker->numberBetween(1, 7),
            'total_price' => $this->faker->randomFloat(2, 100, 1000),
            'tgl_sewa' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'status' => $this->faker->randomElement(['paid', 'unpaid', 'cancel']),
        ];
    }
}
