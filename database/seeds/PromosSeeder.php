<?php

use Illuminate\Database\Seeder;
use App\Promo as Promo;
class PromosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promo_1 = new Promo;
        $promo_1->product = 1;
        $promo_1->discount = 5;
        $promo_1->latest = 1;
        $promo_1->save();
        $promo_2 = new Promo;
        $promo_2->product = 2;
        $promo_2->discount = 5;
        $promo_2->latest = 1;
        $promo_2->save();
        $promo_3 = new Promo;
        $promo_3->product = 3;
        $promo_3->discount = 5;
        $promo_3->latest = 1;
        $promo_3->save();
        $promo_4 = new Promo;
        $promo_4->product = 4;
        $promo_4->discount = 5;
        $promo_4->latest = 1;
        $promo_4->save();
        $promo_5 = new Promo;
        $promo_5->product = 4;
        $promo_5->discount = 5;
        $promo_5->latest = 1;
        $promo_5->save();
        $promo_6 = new Promo;
        $promo_6->product = 5;
        $promo_6->discount = 5;
        $promo_6->latest = 1;
        $promo_6->save();
        $promo_7 = new Promo;
        $promo_7->product = 2;
        $promo_7->discount = 5;
        $promo_7->latest = 1;
        $promo_7->save();
        $promo_8 = new Promo;
        $promo_8->product = 1;
        $promo_8->discount = 5;
        $promo_8->latest = 1;
        $promo_8->save();
        $promo_9 = new Promo;
        $promo_9->product = 8;
        $promo_9->discount = 5;
        $promo_9->latest = 1;
        $promo_9->save();
        $promo_10 = new Promo;
        $promo_10->product = 7;
        $promo_10->discount = 5;
        $promo_10->latest = 1;
        $promo_10->save();
    }
}
