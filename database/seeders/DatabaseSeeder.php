<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([ // ID 1
            'Title' => 'CS'  
          ]);
        DB::table('students')->insert([ // ID 1
            'Name' => 'Mary',
            'LastName' => 'Gh',
            'Identity_Code' => '0001234567',
            'Phone' => '09121234567',
            'Email' => 'test@gmail.com',
            'Field_ID' => '1',
            'Entry_Year' => '2022'  
          ]);
        DB::table('agents')->insert([ // ID 1
          'Name' => 'Zahra',
          'LastName' => 'Ahmadi',
          'Identity_Code' => '0012345678',
          'Field_ID' => '1',
          'role' => 1,
          'Job_Title' => 'Amoozesh'  
        ]);
        DB::table('agents')->insert([ // ID 2
            'Name' => 'Sam',
            'LastName' => 'Thomas',
            'Identity_Code' => '0023456789',
            'Field_ID' => '1',
            'role' => 2,
            'Job_Title' => 'Admin'  
          ]);
    }
}
