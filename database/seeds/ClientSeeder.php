<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => Str::random(10),
            'project_name' => Str::random(30),
            'responsible_person' => Str::random(50),
            'email' => Str::random(10)."gmail.com",
            'number' => Str::random(10),
            'phone' => Str::random(20),
            'fax' => Str::random(10),
            'project_location' => Str::random(30),
            'office_address' => Str::random(50),
            'project_address' => Str::random(10),
            'remarks' => Str::random(30),
            'status' => Str::random(50),
            'name' => Str::random(10),
        ]);
    }
}
