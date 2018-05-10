<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Job::class, 10)->create()->each(function ($u) {
//            $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
