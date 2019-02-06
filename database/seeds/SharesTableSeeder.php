<?php

use Illuminate\Database\Seeder;

class SharesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //------------------------------------------------------------------------
    DB::table('shares')->insert(
        [
            ['share_name' => 'Albert Hein',
             'share_price' => 10,
             'share_qty'=> 100,
            ],

            ['share_name' => 'Heineken',
             'share_price' => 20,
             'share_qty'=> 200,
            ],

            ['share_name' => 'Shell',
             'share_price' => 30,
             'share_qty'=> 300,
            ]

        ]);
    //------------------------------------------------------------------------
    }
}
