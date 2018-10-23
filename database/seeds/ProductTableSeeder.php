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
        factory(App\Product::class, 1000)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Product::class)->make());
        });
    }
}
