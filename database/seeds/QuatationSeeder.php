<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuatationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quatations')->insert([
            'client_id' => 1,
            'description' => 'Desciption',
            'unit' => 'kg',
            'quantity' => 12,
            'rate' => 12,
            'amount' => 12,
            'type' => 'primary',
            'category_type' => 'basic_building',
            'quantity' => 12,
        ]);
    }
}