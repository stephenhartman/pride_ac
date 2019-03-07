<?php

use Illuminate\Database\Seeder;
use App\SeerRating;
use App\UnitSize;
use App\Product;
use App\Brand;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goodman = Brand::where('name', "Goodman")->first();
        $american = Brand::where('name', "American Standard")->first();
        // TODO Add more brands' products
        $trane = Brand::where('name', "Trane")->first();
        //$carrier = Brand::where('name', "Carrier")->first();
        //$daikin = Brand::where('name', "Daikin")->first();

        $seer_rating_14  = SeerRating::where('rating', 14.0)->first();
        $seer_rating_15  = SeerRating::where('rating', 15.0)->first();
        $seer_rating_16  = SeerRating::where('rating', 16.0)->first();

        $unit_size_15 = UnitSize::where('size', 1.5)->first();
        $unit_size_20 = UnitSize::where('size', 2.0)->first();
        $unit_size_25 = UnitSize::where('size', 2.5)->first();
        $unit_size_30 = UnitSize::where('size', 3.0)->first();
        $unit_size_35 = UnitSize::where('size', 3.5)->first();
        $unit_size_40 = UnitSize::where('size', 4.0)->first();
        $unit_size_50 = UnitSize::where('size', 5.0)->first();

        // Goodman
        $goodman_14_15 = new Product();
        $goodman_14_15->model = 'Goodman 1.5 Ton 14 SEER';
        $goodman_14_15->price = 3187.36;
        $goodman_14_15->seer_rating_id = $seer_rating_14->id;
        $goodman_14_15->unit_size_id = $unit_size_15->id;
        $goodman_14_15->brand_id = $goodman->id;
        $goodman_14_15->save();

        $goodman_15_15 = new Product();
        $goodman_15_15->model = 'Goodman 1.5 Ton 15 SEER';
        $goodman_15_15->price = 3492.56;
        $goodman_15_15->seer_rating_id = $seer_rating_15->id;
        $goodman_15_15->unit_size_id = $unit_size_15->id;
        $goodman_15_15->brand_id = $goodman->id;
        $goodman_15_15->save();

        $goodman_16_15 = new Product();
        $goodman_16_15->model = 'Goodman 1.5 Ton 16 SEER';
        $goodman_16_15->price = 3736.48;
        $goodman_16_15->seer_rating_id = $seer_rating_16->id;
        $goodman_16_15->unit_size_id = $unit_size_15->id;
        $goodman_16_15->brand_id = $goodman->id;
        $goodman_16_15->save();

        $goodman_14_20 = new Product();
        $goodman_14_20->model = 'Goodman 2.0 Ton 14 SEER';
        $goodman_14_20->price = 3292.45;
        $goodman_14_20->seer_rating_id = $seer_rating_14->id;
        $goodman_14_20->unit_size_id = $unit_size_20->id;
        $goodman_14_20->brand_id = $goodman->id;
        $goodman_14_20->save();

        $goodman_15_20 = new Product();
        $goodman_15_20->model = 'Goodman 2.0 Ton 15 SEER';
        $goodman_15_20->price = 3578.34;
        $goodman_15_20->seer_rating_id = $seer_rating_15->id;
        $goodman_15_20->unit_size_id = $unit_size_20->id;
        $goodman_15_20->brand_id = $goodman->id;
        $goodman_15_20->save();

        $goodman_16_20 = new Product();
        $goodman_16_20->model = 'Goodman 2.0 Ton 16 SEER';
        $goodman_16_20->price = 3873.33;
        $goodman_16_20->seer_rating_id = $seer_rating_16->id;
        $goodman_16_20->unit_size_id = $unit_size_20->id;
        $goodman_16_20->brand_id = $goodman->id;
        $goodman_16_20->save();

        $goodman_14_25 = new Product();
        $goodman_14_25->model = 'Goodman 2.5 Ton 14 SEER';
        $goodman_14_25->price = 3398.93;
        $goodman_14_25->seer_rating_id = $seer_rating_14->id;
        $goodman_14_25->unit_size_id = $unit_size_25->id;
        $goodman_14_25->brand_id = $goodman->id;
        $goodman_14_25->save();

        $goodman_15_25 = new Product();
        $goodman_15_25->model = 'Goodman 2.5 Ton 15 SEER';
        $goodman_15_25->price = 3684.14;
        $goodman_15_25->seer_rating_id = $seer_rating_15->id;
        $goodman_15_25->unit_size_id = $unit_size_25->id;
        $goodman_15_25->brand_id = $goodman->id;
        $goodman_15_25->save();

        $goodman_16_25 = new Product();
        $goodman_16_25->model = 'Goodman 2.5 Ton 16 SEER';
        $goodman_16_25->price = 3976.52;
        $goodman_16_25->seer_rating_id = $seer_rating_16->id;
        $goodman_16_25->unit_size_id = $unit_size_25->id;
        $goodman_16_25->brand_id = $goodman->id;
        $goodman_16_25->save();

        $goodman_14_30 = new Product();
        $goodman_14_30->model = 'Goodman 3.0 Ton 14 SEER';
        $goodman_14_30->price = 3562.23;
        $goodman_14_30->seer_rating_id = $seer_rating_14->id;
        $goodman_14_30->unit_size_id = $unit_size_30->id;
        $goodman_14_30->brand_id = $goodman->id;
        $goodman_14_30->save();

        $goodman_15_30 = new Product();
        $goodman_15_30->model = 'Goodman 3.0 Ton 15 SEER';
        $goodman_15_30->price = 3887.91;
        $goodman_15_30->seer_rating_id = $seer_rating_15->id;
        $goodman_15_30->unit_size_id = $unit_size_30->id;
        $goodman_15_30->brand_id = $goodman->id;
        $goodman_15_30->save();

        $goodman_16_30 = new Product();
        $goodman_16_30->model = 'Goodman 3.0 Ton 16 SEER';
        $goodman_16_30->price = 4121.37;
        $goodman_16_30->seer_rating_id = $seer_rating_16->id;
        $goodman_16_30->unit_size_id = $unit_size_30->id;
        $goodman_16_30->brand_id = $goodman->id;
        $goodman_16_30->save();

        $goodman_14_35 = new Product();
        $goodman_14_35->model = 'Goodman 3.5 Ton 14 SEER';
        $goodman_14_35->price = 3782.52;
        $goodman_14_35->seer_rating_id = $seer_rating_14->id;
        $goodman_14_35->unit_size_id = $unit_size_35->id;
        $goodman_14_35->brand_id = $goodman->id;
        $goodman_14_35->save();

        $goodman_15_35 = new Product();
        $goodman_15_35->model = 'Goodman 3.5 Ton 15 SEER';
        $goodman_15_35->price = 4110.24;
        $goodman_15_35->seer_rating_id = $seer_rating_15->id;
        $goodman_15_35->unit_size_id = $unit_size_35->id;
        $goodman_15_35->brand_id = $goodman->id;
        $goodman_15_35->save();

        $goodman_16_35 = new Product();
        $goodman_16_35->model = 'Goodman 3.5 Ton 16 SEER';
        $goodman_16_35->price = 4408.88;
        $goodman_16_35->seer_rating_id = $seer_rating_16->id;
        $goodman_16_35->unit_size_id = $unit_size_35->id;
        $goodman_16_35->brand_id = $goodman->id;
        $goodman_16_35->save();

        $goodman_14_40 = new Product();
        $goodman_14_40->model = 'Goodman 4.0 Ton 14 SEER';
        $goodman_14_40->price = 4172.85;
        $goodman_14_40->seer_rating_id = $seer_rating_14->id;
        $goodman_14_40->unit_size_id = $unit_size_40->id;
        $goodman_14_40->brand_id = $goodman->id;
        $goodman_14_40->save();

        $goodman_15_40 = new Product();
        $goodman_15_40->model = 'Goodman 4.0 Ton 15 SEER';
        $goodman_15_40->price = 4428.24;
        $goodman_15_40->seer_rating_id = $seer_rating_15->id;
        $goodman_15_40->unit_size_id = $unit_size_40->id;
        $goodman_15_40->brand_id = $goodman->id;
        $goodman_15_40->save();

        $goodman_16_40 = new Product();
        $goodman_16_40->model = 'Goodman 4.0 Ton 16 SEER';
        $goodman_16_40->price = 4791.21;
        $goodman_16_40->seer_rating_id = $seer_rating_16->id;
        $goodman_16_40->unit_size_id = $unit_size_40->id;
        $goodman_16_40->brand_id = $goodman->id;
        $goodman_16_40->save();

        $goodman_14_50 = new Product();
        $goodman_14_50->model = 'Goodman 5.0 Ton 14 SEER';
        $goodman_14_50->price = 4435.67;
        $goodman_14_50->seer_rating_id = $seer_rating_14->id;
        $goodman_14_50->unit_size_id = $unit_size_50->id;
        $goodman_14_50->brand_id = $goodman->id;
        $goodman_14_50->save();

        $goodman_15_50 = new Product();
        $goodman_15_50->model = 'Goodman 5.0 Ton 15 SEER';
        $goodman_15_50->price = 5434.49;
        $goodman_15_50->seer_rating_id = $seer_rating_15->id;
        $goodman_15_50->unit_size_id = $unit_size_50->id;
        $goodman_15_50->brand_id = $goodman->id;
        $goodman_15_50->save();

        $goodman_16_50 = new Product();
        $goodman_16_50->model = 'Goodman 5.0 Ton 16 SEER';
        $goodman_16_50->price = 5912.32;
        $goodman_16_50->seer_rating_id = $seer_rating_16->id;
        $goodman_16_50->unit_size_id = $unit_size_50->id;
        $goodman_16_50->brand_id = $goodman->id;
        $goodman_16_50->save();

        // Trane
        $trane_14_15 = new Product();
        $trane_14_15->model = 'Trane 1.5 Ton 14 SEER';
        $trane_14_15->price = 3787.36;
        $trane_14_15->seer_rating_id = $seer_rating_14->id;
        $trane_14_15->unit_size_id = $unit_size_15->id;
        $trane_14_15->brand_id = $trane->id;
        $trane_14_15->save();

        $trane_15_15 = new Product();
        $trane_15_15->model = 'Trane 1.5 Ton 15 SEER';
        $trane_15_15->price = 4092.56;
        $trane_15_15->seer_rating_id = $seer_rating_15->id;
        $trane_15_15->unit_size_id = $unit_size_15->id;
        $trane_15_15->brand_id = $trane->id;
        $trane_15_15->save();

        $trane_16_15 = new Product();
        $trane_16_15->model = 'Trane 1.5 Ton 16 SEER';
        $trane_16_15->price = 4236.48;
        $trane_16_15->seer_rating_id = $seer_rating_16->id;
        $trane_16_15->unit_size_id = $unit_size_15->id;
        $trane_16_15->brand_id = $trane->id;
        $trane_16_15->save();

        $trane_14_20 = new Product();
        $trane_14_20->model = 'Trane 2.0 Ton 14 SEER';
        $trane_14_20->price = 3892.45;
        $trane_14_20->seer_rating_id = $seer_rating_14->id;
        $trane_14_20->unit_size_id = $unit_size_20->id;
        $trane_14_20->brand_id = $trane->id;
        $trane_14_20->save();

        $trane_15_20 = new Product();
        $trane_15_20->model = 'Trane 2.0 Ton 15 SEER';
        $trane_15_20->price = 4178.34;
        $trane_15_20->seer_rating_id = $seer_rating_15->id;
        $trane_15_20->unit_size_id = $unit_size_20->id;
        $trane_15_20->brand_id = $trane->id;
        $trane_15_20->save();

        $trane_16_20 = new Product();
        $trane_16_20->model = 'Trane 2.0 Ton 16 SEER';
        $trane_16_20->price = 4473.33;
        $trane_16_20->seer_rating_id = $seer_rating_16->id;
        $trane_16_20->unit_size_id = $unit_size_20->id;
        $trane_16_20->brand_id = $trane->id;
        $trane_16_20->save();

        $trane_14_25 = new Product();
        $trane_14_25->model = 'Trane 2.5 Ton 14 SEER';
        $trane_14_25->price = 3998.93;
        $trane_14_25->seer_rating_id = $seer_rating_14->id;
        $trane_14_25->unit_size_id = $unit_size_25->id;
        $trane_14_25->brand_id = $trane->id;
        $trane_14_25->save();

        $trane_15_25 = new Product();
        $trane_15_25->model = 'Trane 2.5 Ton 15 SEER';
        $trane_15_25->price = 4284.14;
        $trane_15_25->seer_rating_id = $seer_rating_15->id;
        $trane_15_25->unit_size_id = $unit_size_25->id;
        $trane_15_25->brand_id = $trane->id;
        $trane_15_25->save();

        $trane_16_25 = new Product();
        $trane_16_25->model = 'Trane 2.5 Ton 16 SEER';
        $trane_16_25->price = 4576.52;
        $trane_16_25->seer_rating_id = $seer_rating_16->id;
        $trane_16_25->unit_size_id = $unit_size_25->id;
        $trane_16_25->brand_id = $trane->id;
        $trane_16_25->save();

        $trane_14_30 = new Product();
        $trane_14_30->model = 'Trane 3.0 Ton 14 SEER';
        $trane_14_30->price = 4162.23;
        $trane_14_30->seer_rating_id = $seer_rating_14->id;
        $trane_14_30->unit_size_id = $unit_size_30->id;
        $trane_14_30->brand_id = $trane->id;
        $trane_14_30->save();

        $trane_15_30 = new Product();
        $trane_15_30->model = 'Trane 3.0 Ton 15 SEER';
        $trane_15_30->price = 4487.91;
        $trane_15_30->seer_rating_id = $seer_rating_15->id;
        $trane_15_30->unit_size_id = $unit_size_30->id;
        $trane_15_30->brand_id = $trane->id;
        $trane_15_30->save();

        $trane_16_30 = new Product();
        $trane_16_30->model = 'Trane 3.0 Ton 16 SEER';
        $trane_16_30->price = 4721.37;
        $trane_16_30->seer_rating_id = $seer_rating_16->id;
        $trane_16_30->unit_size_id = $unit_size_30->id;
        $trane_16_30->brand_id = $trane->id;
        $trane_16_30->save();

        $trane_14_35 = new Product();
        $trane_14_35->model = 'Trane 3.5 Ton 14 SEER';
        $trane_14_35->price = 4382.52;
        $trane_14_35->seer_rating_id = $seer_rating_14->id;
        $trane_14_35->unit_size_id = $unit_size_35->id;
        $trane_14_35->brand_id = $trane->id;
        $trane_14_35->save();

        $trane_15_35 = new Product();
        $trane_15_35->model = 'Trane 3.5 Ton 15 SEER';
        $trane_15_35->price = 4710.24;
        $trane_15_35->seer_rating_id = $seer_rating_15->id;
        $trane_15_35->unit_size_id = $unit_size_35->id;
        $trane_15_35->brand_id = $trane->id;
        $trane_15_35->save();

        $trane_16_35 = new Product();
        $trane_16_35->model = 'Trane 3.5 Ton 16 SEER';
        $trane_16_35->price = 5008.88;
        $trane_16_35->seer_rating_id = $seer_rating_16->id;
        $trane_16_35->unit_size_id = $unit_size_35->id;
        $trane_16_35->brand_id = $trane->id;
        $trane_16_35->save();

        $trane_14_40 = new Product();
        $trane_14_40->model = 'Trane 4.0 Ton 14 SEER';
        $trane_14_40->price = 4772.85;
        $trane_14_40->seer_rating_id = $seer_rating_14->id;
        $trane_14_40->unit_size_id = $unit_size_40->id;
        $trane_14_40->brand_id = $trane->id;
        $trane_14_40->save();

        $trane_15_40 = new Product();
        $trane_15_40->model = 'Trane 4.0 Ton 15 SEER';
        $trane_15_40->price = 5028.24;
        $trane_15_40->seer_rating_id = $seer_rating_15->id;
        $trane_15_40->unit_size_id = $unit_size_40->id;
        $trane_15_40->brand_id = $trane->id;
        $trane_15_40->save();

        $trane_16_40 = new Product();
        $trane_16_40->model = 'Trane 4.0 Ton 16 SEER';
        $trane_16_40->price = 5391.21;
        $trane_16_40->seer_rating_id = $seer_rating_16->id;
        $trane_16_40->unit_size_id = $unit_size_40->id;
        $trane_16_40->brand_id = $trane->id;
        $trane_16_40->save();

        $trane_14_50 = new Product();
        $trane_14_50->model = 'Trane 5.0 Ton 14 SEER';
        $trane_14_50->price = 5035.67;
        $trane_14_50->seer_rating_id = $seer_rating_14->id;
        $trane_14_50->unit_size_id = $unit_size_50->id;
        $trane_14_50->brand_id = $trane->id;
        $trane_14_50->save();

        $trane_15_50 = new Product();
        $trane_15_50->model = 'Trane 5.0 Ton 15 SEER';
        $trane_15_50->price = 6034.49;
        $trane_15_50->seer_rating_id = $seer_rating_15->id;
        $trane_15_50->unit_size_id = $unit_size_50->id;
        $trane_15_50->brand_id = $trane->id;
        $trane_15_50->save();

        $trane_16_50 = new Product();
        $trane_16_50->model = 'Trane 5.0 Ton 16 SEER';
        $trane_16_50->price = 6512.32;
        $trane_16_50->seer_rating_id = $seer_rating_16->id;
        $trane_16_50->unit_size_id = $unit_size_50->id;
        $trane_16_50->brand_id = $trane->id;
        $trane_16_50->save();

        // American Standard
        $american_14_15 = new Product();
        $american_14_15->model = 'American Standard 1.5 Ton 14 SEER';
        $american_14_15->price = 3787.36;
        $american_14_15->seer_rating_id = $seer_rating_14->id;
        $american_14_15->unit_size_id = $unit_size_15->id;
        $american_14_15->brand_id = $american->id;
        $american_14_15->save();

        $american_15_15 = new Product();
        $american_15_15->model = 'American Standard 1.5 Ton 15 SEER';
        $american_15_15->price = 4092.56;
        $american_15_15->seer_rating_id = $seer_rating_15->id;
        $american_15_15->unit_size_id = $unit_size_15->id;
        $american_15_15->brand_id = $american->id;
        $american_15_15->save();

        $american_16_15 = new Product();
        $american_16_15->model = 'American Standard 1.5 Ton 16 SEER';
        $american_16_15->price = 4236.48;
        $american_16_15->seer_rating_id = $seer_rating_16->id;
        $american_16_15->unit_size_id = $unit_size_15->id;
        $american_16_15->brand_id = $american->id;
        $american_16_15->save();

        $american_14_20 = new Product();
        $american_14_20->model = 'American Standard 2.0 Ton 14 SEER';
        $american_14_20->price = 3892.45;
        $american_14_20->seer_rating_id = $seer_rating_14->id;
        $american_14_20->unit_size_id = $unit_size_20->id;
        $american_14_20->brand_id = $american->id;
        $american_14_20->save();

        $american_15_20 = new Product();
        $american_15_20->model = 'American Standard 2.0 Ton 15 SEER';
        $american_15_20->price = 4178.34;
        $american_15_20->seer_rating_id = $seer_rating_15->id;
        $american_15_20->unit_size_id = $unit_size_20->id;
        $american_15_20->brand_id = $american->id;
        $american_15_20->save();

        $american_16_20 = new Product();
        $american_16_20->model = 'American Standard 2.0 Ton 16 SEER';
        $american_16_20->price = 4473.33;
        $american_16_20->seer_rating_id = $seer_rating_16->id;
        $american_16_20->unit_size_id = $unit_size_20->id;
        $american_16_20->brand_id = $american->id;
        $american_16_20->save();

        $american_14_25 = new Product();
        $american_14_25->model = 'American Standard 2.5 Ton 14 SEER';
        $american_14_25->price = 3998.93;
        $american_14_25->seer_rating_id = $seer_rating_14->id;
        $american_14_25->unit_size_id = $unit_size_25->id;
        $american_14_25->brand_id = $american->id;
        $american_14_25->save();

        $american_15_25 = new Product();
        $american_15_25->model = 'American Standard 2.5 Ton 15 SEER';
        $american_15_25->price = 4284.14;
        $american_15_25->seer_rating_id = $seer_rating_15->id;
        $american_15_25->unit_size_id = $unit_size_25->id;
        $american_15_25->brand_id = $american->id;
        $american_15_25->save();

        $american_16_25 = new Product();
        $american_16_25->model = 'American Standard 2.5 Ton 16 SEER';
        $american_16_25->price = 4576.52;
        $american_16_25->seer_rating_id = $seer_rating_16->id;
        $american_16_25->unit_size_id = $unit_size_25->id;
        $american_16_25->brand_id = $american->id;
        $american_16_25->save();

        $american_14_30 = new Product();
        $american_14_30->model = 'American Standard 3.0 Ton 14 SEER';
        $american_14_30->price = 4162.23;
        $american_14_30->seer_rating_id = $seer_rating_14->id;
        $american_14_30->unit_size_id = $unit_size_30->id;
        $american_14_30->brand_id = $american->id;
        $american_14_30->save();

        $american_15_30 = new Product();
        $american_15_30->model = 'American Standard 3.0 Ton 15 SEER';
        $american_15_30->price = 4487.91;
        $american_15_30->seer_rating_id = $seer_rating_15->id;
        $american_15_30->unit_size_id = $unit_size_30->id;
        $american_15_30->brand_id = $american->id;
        $american_15_30->save();

        $american_16_30 = new Product();
        $american_16_30->model = 'American Standard 3.0 Ton 16 SEER';
        $american_16_30->price = 4721.37;
        $american_16_30->seer_rating_id = $seer_rating_16->id;
        $american_16_30->unit_size_id = $unit_size_30->id;
        $american_16_30->brand_id = $american->id;
        $american_16_30->save();

        $american_14_35 = new Product();
        $american_14_35->model = 'American Standard 3.5 Ton 14 SEER';
        $american_14_35->price = 4382.52;
        $american_14_35->seer_rating_id = $seer_rating_14->id;
        $american_14_35->unit_size_id = $unit_size_35->id;
        $american_14_35->brand_id = $american->id;
        $american_14_35->save();

        $american_15_35 = new Product();
        $american_15_35->model = 'American Standard 3.5 Ton 15 SEER';
        $american_15_35->price = 4710.24;
        $american_15_35->seer_rating_id = $seer_rating_15->id;
        $american_15_35->unit_size_id = $unit_size_35->id;
        $american_15_35->brand_id = $american->id;
        $american_15_35->save();

        $american_16_35 = new Product();
        $american_16_35->model = 'American Standard 3.5 Ton 16 SEER';
        $american_16_35->price = 5008.88;
        $american_16_35->seer_rating_id = $seer_rating_16->id;
        $american_16_35->unit_size_id = $unit_size_35->id;
        $american_16_35->brand_id = $american->id;
        $american_16_35->save();

        $american_14_40 = new Product();
        $american_14_40->model = 'American Standard 4.0 Ton 14 SEER';
        $american_14_40->price = 4772.85;
        $american_14_40->seer_rating_id = $seer_rating_14->id;
        $american_14_40->unit_size_id = $unit_size_40->id;
        $american_14_40->brand_id = $american->id;
        $american_14_40->save();

        $american_15_40 = new Product();
        $american_15_40->model = 'American Standard 4.0 Ton 15 SEER';
        $american_15_40->price = 5028.24;
        $american_15_40->seer_rating_id = $seer_rating_15->id;
        $american_15_40->unit_size_id = $unit_size_40->id;
        $american_15_40->brand_id = $american->id;
        $american_15_40->save();

        $american_16_40 = new Product();
        $american_16_40->model = 'American Standard 4.0 Ton 16 SEER';
        $american_16_40->price = 5391.21;
        $american_16_40->seer_rating_id = $seer_rating_16->id;
        $american_16_40->unit_size_id = $unit_size_40->id;
        $american_16_40->brand_id = $american->id;
        $american_16_40->save();

        $american_14_50 = new Product();
        $american_14_50->model = 'American Standard 5.0 Ton 14 SEER';
        $american_14_50->price = 5035.67;
        $american_14_50->seer_rating_id = $seer_rating_14->id;
        $american_14_50->unit_size_id = $unit_size_50->id;
        $american_14_50->brand_id = $american->id;
        $american_14_50->save();

        $american_15_50 = new Product();
        $american_15_50->model = 'American Standard 5.0 Ton 15 SEER';
        $american_15_50->price = 6034.49;
        $american_15_50->seer_rating_id = $seer_rating_15->id;
        $american_15_50->unit_size_id = $unit_size_50->id;
        $american_15_50->brand_id = $american->id;
        $american_15_50->save();

        $american_16_50 = new Product();
        $american_16_50->model = 'American Standard 5.0 Ton 16 SEER';
        $american_16_50->price = 6512.32;
        $american_16_50->seer_rating_id = $seer_rating_16->id;
        $american_16_50->unit_size_id = $unit_size_50->id;
        $american_16_50->brand_id = $american->id;
        $american_16_50->save();
    }
}
