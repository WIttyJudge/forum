<?php

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
        $this->call([
        	// UsersTableSeeder::class,
        ]);
        factory(App\Models\Thread::class, 15)->create();
        factory(\App\Comments::class, 15)->create();
    }
}
