<?php

use Illuminate\Database\Seeder;

class smcBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->delete();

        $data = array(
            [
                'codebrand' => 1,
                'namebrand' => 'APPLE inc',
                'descriptionbrand' => ''  ,
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()         
            ],
            [
                'codebrand' => 2,
                'namebrand' => 'GRADIENT',
                'descriptionbrand' => ''  ,
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()             
            ],
            [
                'codebrand' => 3,
                'namebrand' => 'ACER',
                'descriptionbrand' => ''  ,
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()             
            ],
            [
                'codebrand' => 4,
                'namebrand' => 'CCE',
                'descriptionbrand' => ''  ,
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()             
            ],
            [
                'codebrand'=> 5,
                'namebrand' => 'HP',
                'descriptionbrand' => ''  ,
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()             
            ],
            [
                'codebrand'=> 6,
                'namebrand' => 'MOTOROLA',
                'descriptionbrand' => ''  ,
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()             
            ],
            [
                'codebrand'=> 7,
                'namebrand' => 'MICROSOFT',
                'descriptionbrand' => ''  ,
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()             
            ],
        );

        DB::table('brand')->insert($data);
    }
}
