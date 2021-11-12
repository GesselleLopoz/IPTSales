<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=> "Chanel New Mini Classic Bag",
                'description'=>'All Chanel Bag items',
            ],
            [
                'category'=> "PUFFER SMALL BAG IN MERINO SHEARLING AND LAMBSKIN",
                'description'=>'All YSL Bag items',
            ],
            [
                'category'=> "Dior Le 30 Medium Tote",
                'description'=>'All Dior Bag items',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
