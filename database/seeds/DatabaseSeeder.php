<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();
        // $this->call(UsersTableSeeder::class);
        $this->call(AccountTypeSeeder::class);
        $this->call(MaterialTypeSeeder::class);
        $this->call(AcademicDegreesSeeder::class);
        $this->call(CourseOfStudiesSeeder::class);
        
        
        Model::reguard();
    }

}
