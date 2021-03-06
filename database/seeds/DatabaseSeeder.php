<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostCommentsSeeder::class);

        //$this->call(Role_UserTableSeeder::class);

        // $this->call(UsersTableSeeder::class);
    }
}
