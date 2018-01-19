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
        // Create UnitSize and SeerRating
        $this->call(UnitSizeSeeder::class);
        $this->call(SeerRatingSeeder::class);
        $this->call(BrandSeeder::class);
        // Create Products
        $this->call(ProductSeeder::class);
    }
}
