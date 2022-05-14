<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clients;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Client::factory()->create();
}
}