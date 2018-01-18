<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goodman = new Brand();
        $goodman->name = 'Goodman';
        $goodman->save();

        $trane = new Brand();
        $trane->name = 'Trane';
        $trane->save();

        $carrier = new Brand();
        $carrier->name = 'Carrier';
        $carrier->save();

        $daikin = new Brand();
        $daikin->name = 'Daikin';
        $daikin->save();
    }
}
