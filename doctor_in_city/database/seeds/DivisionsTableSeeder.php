<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $divisions = [
      1 => "Barisal",
      2 => "Chittagong",
      3 => "Dhaka",
      4 => "Khulna",
      5 => "Mymensingh",
      6 => "Rajshahi",
      7 => "Sylhet",
      8 => "Rangpur"
    ];
     foreach ($divisions as $index => $division) {
       DB::table('divisions')->insert([
          'id' => $index,
          'name' => $division,
          'slug' => str_slug($division),
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
     }
    }
}
