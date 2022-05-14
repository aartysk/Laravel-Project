<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('clients')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
        ]);

        DB::table('clients')->insert([
            'name' => Str::random(6),
            'email' => Str::random(6).'@inbox.lv',
        ]);

        DB::table('clients')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@lmt.com',
        ]);

    }
}
