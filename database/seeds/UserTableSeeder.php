<?php

/* Antes
use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $this->createAdmin();
        $this->createUsers(100);
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'Willy Gomez',
            'email' => 'wp_gomez@dlirio.com.pe',
            'password' => bcrypt('123456')
        ]);
    }

    private function createUsers($total)
    {
        $faker = Faker::create();

        for ($i = 1; $i <= $total; $i++)
        {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt($faker->password),
            ]);
        }
    }
}
*/

use Faker\Generator;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            /*'password' => bcrypt($faker->password),*/
            'password' => bcrypt('secret'),
        ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'Willy Gomez',
            'email' => 'wp_gomez@dlirio.com.pe',
            'password' => bcrypt('123456')
        ]);
    }

}