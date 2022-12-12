<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  \DB::table('agents')->truncate();
     //   \DB::table('customers')->truncate();
      //  \DB::table('orders')->truncate();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         \App\Models\Agent::factory(500)->create();
         \App\Models\Customer::factory(5000)->create();
         \App\Models\Order::factory(10)->create();

    }
}
