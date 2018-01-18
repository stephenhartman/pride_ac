<?php

use Illuminate\Database\Seeder;
use App\SeerRating;
use App\UnitSize;
use App\Product;
use App\Brand;

class GoodmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goodman = Brand::where('name', "Goodman")->first();
        $trane = Brand::where('name', "Trane")->first();
        $carrier = Brand::where('name', "Carrier")->first();
        $daikin = Brand::where('name', "Daikin")->first();

        $seer_rating_14  = SeerRating::where('rating', 14.0)->first();
        $seer_rating_15  = SeerRating::where('rating', 15.0)->first();
        $seer_rating_16  = SeerRating::where('rating', 16.0)->first();

        $unit_size_15 = UnitSize::where('size', 1.5)->first();
        $unit_size_20 = UnitSize::where('size', 2.0)->first();
        $unit_size_25 = UnitSize::where('size', 2.5)->first();
        $unit_size_30 = UnitSize::where('size', 3.0)->first();
        $unit_size_35 = UnitSize::where('size', 3.5)->first();
        $unit_size_40 = UnitSize::where('size', 4.0)->first();
        $unit_size_45 = UnitSize::where('size', 4.5)->first();
        $unit_size_50 = UnitSize::where('size', 5.0)->first();

        $goodman_14_15 = new Product();
        $goodman_14_15->model = 'Goodman 1.5 Ton 14 SEER';
        $goodman_14_15->price = 3187.36;
        $goodman_14_15->seer_rating_id = $seer_rating_14->id;
        $goodman_14_15->unit_size_id = $unit_size_15->id;
        $goodman_14_15->brand_id = $goodman->id;
        $goodman_14_15->save();
    }
}
