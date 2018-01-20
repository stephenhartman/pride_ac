<?php

use Illuminate\Database\Seeder;
use App\UnitSize;

class UnitSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit_size_15 = new UnitSize();
        $unit_size_15->size = 1.5;
        $unit_size_15->save();

        $unit_size_20 = new UnitSize();
        $unit_size_20->size = 2.0;
        $unit_size_20->save();

        $unit_size_25 = new UnitSize();
        $unit_size_25->size = 2.5;
        $unit_size_25->save();

        $unit_size_30 = new UnitSize();
        $unit_size_30->size = 3.0;
        $unit_size_30->save();

        $unit_size_35 = new UnitSize();
        $unit_size_35->size = 3.5;
        $unit_size_35->save();

        $unit_size_40 = new UnitSize();
        $unit_size_40->size = 4.0;
        $unit_size_40->save();

        $unit_size_45 = new UnitSize();
        $unit_size_45->size = 4.5;
        $unit_size_45->save();

        $unit_size_50 = new UnitSize();
        $unit_size_50->size = 5.0;
        $unit_size_50->save();
    }
}
