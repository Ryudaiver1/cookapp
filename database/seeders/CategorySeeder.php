<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '高級'
        ]);
        
        DB::table('categories')->insert([
            'name' => '手軽'
        ]);
        DB::table('categories')->insert([
            'name' => '簡単'
        ]);

    }
}
