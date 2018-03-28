<?php

use Illuminate\Database\Seeder;

class smcStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->delete();

        $data = array(
            [
                'codestatus' => 1,
                'namestatus' => 'ativo',
                'descriptionstatus' => ''  ,
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'codestatus' => 2,
                'namestatus' => 'inativo',
                'descriptionstatus' => '',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()               
            ],
        );

        DB::table('status')->insert($data);
    }
}
