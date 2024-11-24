<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // シダーテーブルを呼び出す
        $this->call([
            AdminsTableSeeder::class,
            UserSeeder::class
        ]);
    }
}
