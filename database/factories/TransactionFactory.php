<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
  protected $model = Transaction::class;
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $locations = Location::pluck('id');

    return [
      'location_id' => $locations->shuffle()->first(),
      'description' => fake()->text(255),
      'amount' => rand(1000, 9999)
    ];
  }
}
