<?php

use Illuminate\Database\Seeder;


class GoldPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $goldprice = new \App\Model\GoldPrice();


        $goldprice->value = "1400.52";
        $goldprice->user_id='1';
        $goldprice->save();
    }
}
