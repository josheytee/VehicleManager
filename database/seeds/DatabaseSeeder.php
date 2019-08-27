<?php

use App\Owner;
use App\User;
use App\Vehicle;
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
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'foo baz',
            'password' => bcrypt('123456'),
            'email' => 'tobiagbeja4@gmail.com'
        ]);
        factory(Owner::class, 20)->create();
        factory(Vehicle::class, 20)->create();
    }
}
