<?php

use Illuminate\Database\Seeder;

class DetailedReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Fiscaluno\Review\DetailedReview::class, 2)->create();
    }
}
