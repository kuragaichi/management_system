<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PharIo\Manifest\Author;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()->count(3)->create();
    }
}
