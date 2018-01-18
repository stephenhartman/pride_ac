<?php

use Illuminate\Database\Seeder;
use App\SeerRating;

class SeerRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seer_rating_14 = new SeerRating();
        $seer_rating_14->rating = 14;
        $seer_rating_14->save();

        $seer_rating_15 = new SeerRating();
        $seer_rating_15->rating = 15;
        $seer_rating_15->save();

        $seer_rating_16 = new SeerRating();
        $seer_rating_16->rating = 16;
        $seer_rating_16->save();
    }
}
