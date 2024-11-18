<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vehiculeSeeder extends Seeder
{
    
    public function run(): void
    {
       DB::table('vehicles')->insert([
        ['model' => 'Spyder RS', 'sasiu'=>'1HGCM82633A123456','dealer_id'=>1, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'Turbo', 'sasiu'=>'2MNTV12391B222234','dealer_id'=>2, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'Targa', 'sasiu'=>'3ABCD98765C123444','dealer_id'=>3, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'Turbo Cabriolet', 'sasiu'=>'4RTYU458902D897892','dealer_id'=>4, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'Dakar', 'sasiu'=>'5TUIO12345R113456','dealer_id'=>5, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'GT3', 'sasiu'=>'6YUIOA123456','dealer_id'=>6, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'GT3 rs', 'sasiu'=>'9ABCD12234E987654','dealer_id'=>7, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'Taycan', 'sasiu'=>'1RETY12234S987677','dealer_id'=>8, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'GT3 rs', 'sasiu'=>'4ABCD12909P123456','dealer_id'=>9, 'created_at' => now(), 'updated_at' => now()],
        ['model' => 'Taycan', 'sasiu'=>'2TDFG90988E213450','dealer_id'=>10, 'created_at' => now(), 'updated_at' => now()],
       ]);
    }
}
