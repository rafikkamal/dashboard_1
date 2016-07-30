<?php

use Illuminate\Database\Seeder;
use App\Category as Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_1 = new Category;
        $category_1->title = 'Mobile';
        $category_1->status = 'active';
        $category_1->save();
        $category_2 = new Category;
        $category_2->title = 'Tablets';
        $category_2->status = 'active';
        $category_2->save();
        $category_3 = new Category;
        $category_3->title = 'Laptop';
        $category_3->status = 'active';
        $category_3->save();
        $category_4 = new Category;
        $category_4->title = 'Desktop';
        $category_4->status = 'active';
        $category_4->save();
        $category_5 = new Category;
        $category_5->title = 'Camera';
        $category_5->status = 'active';
        $category_5->save();
    }
}
