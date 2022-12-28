<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\King;
class KingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        King::create([
            'name' => 'DatTha',
            'image'=>'dat-dat.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         King::create([
            'name' => 'kostar',
            'image'=>'sat-naykha.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]); King::create([
            'name' => 'ko khant',
            'image'=>'kokhant.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        King::create([
            'name' => 'DatTha',
            'image'=>'dat-dat.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         King::create([
            'name' => 'kostar',
            'image'=>'sat-naykha.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]); King::create([
            'name' => 'ko khant',
            'image'=>'kokhant.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        King::create([
            'name' => 'DatTha',
            'image'=>'dat-dat.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
         King::create([
            'name' => 'kostar',
            'image'=>'sat-naykha.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]); King::create([
            'name' => 'ko khant',
            'image'=>'kokhant.jpg',
            'vote'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
