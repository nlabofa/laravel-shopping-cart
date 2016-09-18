<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'src\img\img1.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'src\img\img2.jpg',
            'title' => 'A Song of Ice and Fire - A Storm of Swords',
            'description' => 'No one is going to survive!',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'src\img\img3.jpg',
            'title' => 'Lord of the Rings',
            'description' => 'I found the movies to be better ...',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'src\img\img4.jpg',
            'title' => 'A Song of Ice and Fire - Game of Thrones',
            'description' => 'No one is going to survive!',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'src\img\img5.jpg',
            'title' => 'A Song of Ice and Fire - A Feast for Crows',
            'description' => 'Still, no one is going to survive!',
            'price' => 20
        ]);
        $product->save();
    }
}
