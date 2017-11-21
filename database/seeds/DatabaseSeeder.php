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
        $this->call(StudentSeeder::class);
        $this->call(InstitutionSeeder::class);
        $this->call(GeneralReviewSeeder::class);
        $this->call(DetailedReviewSeeder::class);
    }
}
