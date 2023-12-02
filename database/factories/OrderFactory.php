<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use App\Models\DataKamar;
// use Illuminate\Support\Carbon;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition()
    {
        $statusOptions = ['unpaid'];

        $user = User::inRandomOrder()->first();
        $kamar = DataKamar::inRandomOrder()->first();
        $namaPemesan = $this->faker->name;
        $durasiSewa = $this->faker->numberBetween(1, 7);
        $totalPrice = $kamar->harga_per_hari * $durasiSewa;
        $tglSewa = Carbon::now()->subDays($this->faker->numberBetween(1, 30));
        $status = $this->faker->randomElement($statusOptions);

        return [
            'user_id' => $user->id,
            'kamar_id' => $kamar->id,
            'nama_pemesan' => $namaPemesan,
            'durasi_sewa' => $durasiSewa,
            'total_price' => $totalPrice,
            'tgl_sewa' => $tglSewa,
            'status' => $status,
        ];
    }
}
