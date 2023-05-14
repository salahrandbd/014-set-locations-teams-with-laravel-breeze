<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\LocationSeeder;
use Database\Seeders\TransactionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      LocationSeeder::class,
      TransactionSeeder::class
    ]);
  }
}
