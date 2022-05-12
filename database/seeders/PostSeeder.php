<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Post;


class Postseeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Post::factory()->count(10)->create();
    }
}