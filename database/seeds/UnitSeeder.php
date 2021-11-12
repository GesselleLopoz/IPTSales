<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=> "Mini",
                'description'=>'Variety of sizes, colors and designs',
            ],
            [
                'unit_type'=> "Small Bag",
                'description'=>'Saint Laurent Monogram Bag',
            ],
            [
                'unit_type'=> "Best-selling",
                'description'=>'A timeless and unique work of art',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}