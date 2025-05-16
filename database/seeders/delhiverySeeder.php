<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class delhiverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('delhivery_boys')->insert([
            ['name'=>'A','email'=>'a@yopmail.com','delhivery_limit'=>2,'status'=>'available','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'B','email'=>'b@yopmail.com','delhivery_limit'=>4,'status'=>'available','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'C','email'=>'c@yopmail.com','delhivery_limit'=>5,'status'=>'available','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'D','email'=>'d@yopmail.com','delhivery_limit'=>3,'status'=>'available','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
