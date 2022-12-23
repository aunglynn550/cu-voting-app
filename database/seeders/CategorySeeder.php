<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'type' => 'King',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Category::create([
            'type' => 'Queen',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Category::create([
            'type' => 'All_King',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Category::create([
            'type' => 'All_Queen',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
