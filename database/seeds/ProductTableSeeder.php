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
        $product = new App\Product([
            'imagepath'=>'http://3.bp.blogspot.com/-3REl1dnP4Xs/VJLZohkS0mI/AAAAAAAAEIU/M0Bb4r6XLOs/s1600/laravel-logo.jpg',
            'title'=>'Laravel',
            'description'=>'Superhero!',
            'price'=>1000
        ]);

        $product->save();


        $product = new App\Product([
            'imagepath'=>'http://3.bp.blogspot.com/-3REl1dnP4Xs/VJLZohkS0mI/AAAAAAAAEIU/M0Bb4r6XLOs/s1600/laravel-logo.jpg',
            'title'=>'Laravel2',
            'description'=>'Superhero!2',
            'price'=>2000
        ]);

        $product->save();

        $product = new App\Product([
            'imagepath'=>'http://3.bp.blogspot.com/-3REl1dnP4Xs/VJLZohkS0mI/AAAAAAAAEIU/M0Bb4r6XLOs/s1600/laravel-logo.jpg',
            'title'=>'Laravel3',
            'description'=>'Superhero!3',
            'price'=>3000
        ]);

        $product->save();

        $product = new App\Product([
            'imagepath'=>'http://3.bp.blogspot.com/-3REl1dnP4Xs/VJLZohkS0mI/AAAAAAAAEIU/M0Bb4r6XLOs/s1600/laravel-logo.jpg',
            'title'=>'Laravel4',
            'description'=>'Superhero!4',
            'price'=>4000
        ]);

        $product->save();
    }
    //run($product)
}
