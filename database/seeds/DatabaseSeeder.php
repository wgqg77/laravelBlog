<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
        $this->call(PostTableSeeder::class);
    }

}

class PostTableSeeder extends Seeder
{
    public function run()
    {
        Post::truncate();
        factory(Post::class, 20)->create();
    }
}
