<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
                'name' => 'Oppo',
                'price' => '200',
                'description' => 'A Smartphone with 4gb ram and much more feature',
                'category' => 'Mobile',
                'gallery' => 'https://unsplash.com/photos/xsGxhtAsfSA'
            ],
            [
                'name' => 'LG TV',
                'price' => '200',
                'description' => 'A Smart TV with much more feature',
                'category' => 'TV',
                'gallery' => 'https://unsplash.com/photos/xsGxhtAsfSA'
            ],
            [
                'name' => 'VIVO',
                'price' => '200',
                'description' => 'A Smartphone with 4gb ram and much more feature',
                'category' => 'Mobile',
                'gallery' => 'https://unsplash.com/photos/xsGxhtAsfSA'
            ],
            [
                'name' => 'Apple',
                'price' => '200',
                'description' => 'A Smartphone with 4gb ram and much more feature',
                'category' => 'Mobile',
                'gallery' => 'https://unsplash.com/photos/xsGxhtAsfSA'
            ]
        ]);
    }
}
