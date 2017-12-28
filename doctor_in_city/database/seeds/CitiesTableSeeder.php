<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $borisal = ["Barguna", "Barisal", "Bhola", "Jhalokati", "Patuakhali", "Pirojpur"];
      $chittagong = ["Bandarban", "Brahmanbaria", "Chandpur", "Chittagong", "Comilla", "Cox's bazar", "Feni", "Khagrachhari", "Lakshmipur", "Noakhali", "Rangamati"];
      $dhaka = ["Dhaka", "Faridpur", "Gazipur", "Gopalganj", "Kishoreganj", "Madaripur", "Manikganj", "Munshiganj", "Narayanganj", "Narsingdi", "Rajbari", "Shariatpur", "Tangail"];
      $khulna = ["Bagerhat", "Chuadanga", "Jessore", "Jhenaidah", "Khulna", "Kushtia", "Magura", "Meherpur", "Narail", "Satkhira"];
      $mymensingh = ["Jamalpur", "Mymensingh", "Netrakona", "Sherpur"];
      $rajshahi = ["Bogra", "Chapainababganj", "Joypurhat", "Pabna", "Naogaon", "Natore", "Rajshahi", "Sirajganj"];
      $rangpur = ["Dinajpur", "Gaibandha", "Kurigram,", "Lalmonirhat", "Nilphamari", "Panchagarh", "Rangpur", "Thakurgaon"];
      $sylhet = ["Habiganj", "Maulvibazar", "Sunamganj", "Sylhet"];
      $divisions = [
        1 => $borisal,
        2 => $chittagong,
        3 => $dhaka,
        4 => $khulna,
        5 => $mymensingh,
        6 => $rajshahi,
        7 => $rangpur,
        8 => $sylhet
      ];
      foreach ($divisions as $division_id => $division) {
       foreach ($division as $city) {
         DB::table('cities')->insert([
            'name' => $city,
            'division_id' => $division_id,
            'slug' => str_slug($city),
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
       }
      }
    }
}
