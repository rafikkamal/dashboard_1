<?php

use Illuminate\Database\Seeder;
use App\Product as Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_1 = new Product;
        $product_1->title = 'Micro-ATX B85 features high-endurance 5X Protection and new UEFI BIOS';
        $product_1->stock = 5;
        $product_1->category = 'Desktop';
        $product_1->image = 'product_1.png';
        $product_1->discount = 5;
        $product_1->save();
        $product_2 = new Product;
        $product_2->title = 'Sony Xperia ZI';
        $product_2->stock = 5;
        $product_2->category = 'Mobile';
        $product_2->image = 'mobile.png';
        $product_2->discount = 5;
        $product_2->save();
        $product_3 = new Product;
        $product_3->title = 'Micro-ATX B85 features high-endurance 5X Protection and new UEFI BIOS';
        $product_3->stock = 5;
        $product_3->category = 'Desktop';
        $product_3->image = 'laptop.png';
        $product_3->discount = 5;
        $product_3->save();
        $product_4 = new Product;
        $product_4->title = 'Sony Xperia ZI';
        $product_4->stock = 5;
        $product_4->category = 'Mobile';
        $product_4->image = 'tablet.png';
        $product_4->discount = 5;
        $product_4->save();
        $product_5 = new Product;
        $product_5->title = 'Sony Xperia ZI';
        $product_5->stock = 5;
        $product_5->category = 'Mobile';
        $product_5->image = 'product_1.png';
        $product_5->discount = 5;
        $product_5->save();
        $product_6 = new Product;
        $product_6->title = 'Sony Xperia ZI';
        $product_6->stock = 5;
        $product_6->category = 'Mobile';
        $product_6->image = 'mobile.png';
        $product_6->discount = 5;
        $product_6->save();
        $product_7 = new Product;
        $product_7->title = 'Sony Xperia ZI';
        $product_7->stock = 5;
        $product_7->category = 'Mobile';
        $product_7->image = 'laptop.png';
        $product_7->discount = 5;
        $product_7->save();
        $product_8 = new Product;
        $product_8->title = 'Sony Xperia ZI';
        $product_8->stock = 5;
        $product_8->category = 'Mobile';
        $product_8->image = 'tablet.png';
        $product_8->discount = 5;
        $product_8->save();
        $product_9 = new Product;
        $product_9->title = 'Sony Xperia ZI';
        $product_9->stock = 5;
        $product_9->category = 'Mobile';
        $product_9->image = 'product_1.png';
        $product_9->discount = 5;
        $product_9->save();
        $product_10 = new Product;
        $product_10->title = 'Sony Xperia ZI';
        $product_10->stock = 5;
        $product_10->category = 'Mobile';
        $product_10->image = 'product_1.png';
        $product_10->discount = 5;
        $product_10->save();
        $product_11 = new Product;
        $product_11->title = 'Sony Xperia ZI';
        $product_11->stock = 5;
        $product_11->category = 'Mobile';
        $product_11->image = 'product_1.png';
        $product_11->discount = 5;
        $product_11->save();
    }
}
