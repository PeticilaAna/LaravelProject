<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dealerSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('dealers')->insert([
            ['name' => 'Dealer1', 'CEC'=>'ABC123','CUI'=>123456789, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer2', 'CEC'=>'CDE123','CUI'=>234567890, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer3', 'CEC'=>'ERT234','CUI'=>109876542, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer4', 'CEC'=>'RST344','CUI'=>876542324, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer5', 'CEC'=>'WQT333','CUI'=>787890983, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer6', 'CEC'=>'POY225','CUI'=>537920192, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer7', 'CEC'=>'OLK209','CUI'=>334343433, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer8', 'CEC'=>'AWR112','CUI'=>345545449, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer9', 'CEC'=>'MNO567','CUI'=>787667875, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dealer10', 'CEC' => 'VBN123', 'CUI' => 33457901, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
