<?php

use Illuminate\Database\Seeder;

class smcInventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory')->delete();

        $data = array(
            [
                'product_codeproduct' => 1,
                'entryamount' => 20,
                'entryunitaryprice' => 5.00,
                'totalentryprice' => 100.00,
                'outamount' => 10,
                'outunitaryprice' => 5.50,
                'totaloutprice' => 55.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'product_codeproduct' => 2,
                'entryamount' => 20,
                'entryunitaryprice' => 5.00,
                'totalentryprice' => 100.00,
                'outamount' => 10,
                'outunitaryprice' => 5.00,
                'totaloutprice' => 50.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'product_codeproduct' => 3,
                'entryamount' => 20,
                'entryunitaryprice' => 3.00,
                'totalentryprice' => 60.00,
                'outamount' => 10,
                'outunitaryprice' => 1.50,
                'totaloutprice' => 15.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'product_codeproduct' => 4,
                'entryamount' => 20,
                'entryunitaryprice' => 2.00,
                'totalentryprice' => 40.00,
                'outamount' => 10,
                'outunitaryprice' => 2.50,
                'totaloutprice' => 25.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'product_codeproduct' => 5,
                'entryamount' => 20,
                'entryunitaryprice' => 10.00,
                'totalentryprice' => 200.00,
                'outamount' => 10,
                'outunitaryprice' => 6.50,
                'totaloutprice' => 65.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'product_codeproduct' => 6,
                'entryamount' => 20,
                'entryunitaryprice' => 50.00,
                'totalentryprice' => 1000.00,
                'outamount' => 10,
                'outunitaryprice' => 9.50,
                'totaloutprice' => 95.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'product_codeproduct' => 7,
                'entryamount' => 20,
                'entryunitaryprice' => 4.00,
                'totalentryprice' => 80.00,
                'outamount' => 10,
                'outunitaryprice' => 6.00,
                'totaloutprice' => 60.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'product_codeproduct' => 8,
                'entryamount' => 20,
                'entryunitaryprice' => 1.00,
                'totalentryprice' => 20.00,
                'outamount' => 10,
                'outunitaryprice' => 4.50,
                'totaloutprice' => 45.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'product_codeproduct' => 9,
                'entryamount' => 20,
                'entryunitaryprice' => 5.00,
                'totalentryprice' => 100.00,
                'outamount' => 10,
                'outunitaryprice' => 5.50,
                'totaloutprice' => 55.00,
                'data' => date('Y-m-d'),
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ]
        );

        DB::table('inventory')->insert($data);
    }
}
