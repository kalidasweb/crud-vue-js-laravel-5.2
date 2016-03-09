<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        
        DB::table('artikel')->insert([

        	'title' => 'test 1',
        	'description' => 'test',
        	'body'	=> 'test 1'
        	]);

         DB::table('artikel')->insert([

            'title' => 'test 2',
            'description' => 'test',
            'body'  => 'test 2'
            ]);

          DB::table('artikel')->insert([

            'title' => 'test 3',
            'description' => 'test',
            'body'  => 'test 3'
            ]);

           DB::table('artikel')->insert([

            'title' => 'test 4',
            'description' => 'test',
            'body'  => 'test 4'
            ]);
    }
}
