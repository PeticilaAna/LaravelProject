<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Alma Hanson', 'birthdate'=>'1990-01-02','dealer_id'=>1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Elbert Fletcher', 'birthdate'=>'1989-05-03','dealer_id'=>2,'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chelsea Harret', 'birthdate'=>'1979-10-02','dealer_id'=>3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Winton Sherman', 'birthdate'=>'2000-01-02','dealer_id'=>4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hubert Riley', 'birthdate'=>'2001-01-02','dealer_id'=>5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Anthony Barnes', 'birthdate'=>'1987-04-07','dealer_id'=>6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Beatrice Kain', 'birthdate'=>'1997-06-08','dealer_id'=>7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dale Burrows', 'birthdate'=>'2002-03-03','dealer_id'=>8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Humphrey Sutton', 'birthdate'=>'1993-06-07','dealer_id'=>9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alice Tingey', 'birthdate'=>'2000-09-09','dealer_id'=>10, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
