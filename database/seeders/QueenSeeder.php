<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Queen;
class QueenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Queen::create([
            'name' => 'leonor',
            'image'=>'leonor1.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        Queen::create([
            'name' => 'leonor',
            'image'=>'leonor2.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Queen::create([
            'name' => 'Leonor',
            'image'=>'leonor3.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Queen::create([
            'name' => 'leonor',
            'image'=>'leonor1.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        Queen::create([
            'name' => 'leonor',
            'image'=>'leonor2.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Queen::create([
            'name' => 'Leonor',
            'image'=>'leonor3.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Queen::create([
            'name' => 'leonor',
            'image'=>'leonor1.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        Queen::create([
            'name' => 'leonor',
            'image'=>'leonor2.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        Queen::create([
            'name' => 'Leonor',
            'image'=>'leonor3.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
