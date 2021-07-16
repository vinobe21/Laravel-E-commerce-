<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Redmi note 10',
                'price' => '12999',
                'category' => 'Mobile Phone',
                'discription' => 'Redmi Note 10 (Shadow Black, 4GB RAM, 64GB Storage) - Amoled Dot Display | 48MP Sony Sensor IMX582 | Snapdragon 678 Processor',
                'gallery' => 'https://m.media-amazon.com/images/I/71OGzLCrjZS._AC_UY218_.jpg'
            ], [
                'name' => 'Samsung Galaxy M12',
                'price' => '15999',
                'category' => 'Mobile Phone',
                'discription' => 'Samsung Galaxy M12 (Blue,4GB RAM, 64GB Storage) 6000 mAh with 8nm Processor | True 48 MP Quad Camera | 90Hz Refresh Rate',
                'gallery' => 'https://m.media-amazon.com/images/I/71yYaNztZ0L._AC_UY218_.jpg'
            ], [
                'name' => 'Oppo A31',
                'price' => '10999',
                'category' => 'Mobile Phone',
                'discription' => 'Oppo A31 (Fantasy White, 6GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers',
                'gallery' => 'https://m.media-amazon.com/images/I/61CnyJ-IbML._AC_UY218_.jpg'
            ], [
                'name' => 'OnePlus TV',
                'price' => '20999',
                'category' => 'TV',
                'discription' => 'OnePlus 80 cm (32 inches) Y Series HD Ready LED Smart Android TV 32Y1 (Black) (2020 Model)',
                'gallery' => 'https://images-eu.ssl-images-amazon.com/images/I/51sIfBeY3sL._SY300_SX300_QL70_FMwebp_.jpg'
            ], [
                'name' => 'Laptop',
                'price' => '38000',
                'category' => 'Laptop',
                'discription' => 'Lenovo Ideapad Slim 3 Intel Celeron N4020 15.6" (39.62cms) HD Thin and Light Laptop (4GB/256SSD/Win10/Intel UHD Graphics 600/Platinum Grey/1.7kg), 81WQ00B6IN',
                'gallery' => 'https://m.media-amazon.com/images/I/61Dw5Z8LzJL._AC_UY218_.jpg'
            ],
        ]);
    }
}