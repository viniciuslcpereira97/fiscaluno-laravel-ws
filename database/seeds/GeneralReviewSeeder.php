<?php

use Illuminate\Database\Seeder;

class GeneralReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Fiscaluno\Review\GeneralReview::class, 2)->create();
    }
}
