<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   
        $param = [
        [
            'planet_ja' => '水星',
            'planet_en' => 'MERCURY',
            'radius' => 2439,
            'weight' => 3310,
                    
        
        ],
        [
            'planet_ja' => '金星',
            'planet_en' => 'VENUS',
            'radius' => 6052,
            'weight' => 48700,        
        
        ],
        [
            'planet_ja' => '地球',
            'planet_en' => 'EARTH',
            'radius' => 6378,
            'weight' => 59760,        
        
        ],
        [
            'planet_ja' => '火星',
            'planet_en' => 'MARS',
            'radius' => 3397,
            'weight' => 6420,        
        
        ],
        [
            'planet_ja' => '木星',
            'planet_en' => 'JUPITER',
            'radius' => 71492,
            'weight' => 18993500,        
        
        ],
        [
            'planet_ja' => '土星',
            'planet_en' => 'SATURN',
            'radius' => 60268,
            'weight' => 5685980,        
        
        ],
        [
            'planet_ja' => '天王星',
            'planet_en' => 'URANUS',
            'radius' => 25559,
            'weight' => 868910,        
        
        ],
        [
            'planet_ja' => '海王星',
            'planet_en' => 'NEPTUNE',
            'radius' => 24764,
            'weight' => 1029660,        
        
        ]
        ];
        DB::table('planets')->insert($param);
    }

}
