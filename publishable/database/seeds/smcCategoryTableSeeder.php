<?php

use Illuminate\Database\Seeder;

class smcCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();

        $data = array(
            [
                'codecategory' => 1,
                'namecategory' => 'Informatica',
                'descriptioncategory' => ''  ,
                'imgcategory' => '',
                'keywords' => 'eletronicos; informatica',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'codecategory' => 2,
                'namecategory' => 'Celulares',
                'descriptioncategory' => '',
                'imgcategory' => '',
                'keywords' => 'eletronicos; informatica',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()             
            ],
        );

        DB::table('category')->insert($data);
    }
}
