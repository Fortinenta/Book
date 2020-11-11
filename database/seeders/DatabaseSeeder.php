<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        DB::table('books')->insert([
          'title'=>'War Of the Worlds',
          'description'=>'A science fiction masterpiece about Martians invading London',
          'author'=>'H. G. Wells',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
        DB::table('books')->insert([
          'title'=>'A Wrinkle in TIme',
          'description'=>'A young girl goes on a mission to save her father who has gone missing after working on a mysterious project called a tesseract.',
          'author'=>'Medeleine L\'Engle',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]);
    }
}
