<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //seeder use kora hoi jokon datavase freash korarr por abar nija thaka jano data gulo upoad kora jai
        // $category  = new category();
        // $category->title="phpne";
        // $category->slug='phpne';
        // $category->save();
        \App\Models\category::factory(10)->create();

    }
}
