<?php

use Illuminate\Database\Seeder;

class smcProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provider')->delete();

        $data = array(
            [
                'address_codeaddress' => 1,
                'status_codestatus' => 1,
                'codeprovider' => 1,
                'nameprovider' => 'APPLE inc',
                'descriptionprovider' => 'Fornecedor de equipamentos de informática',                
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()    
            ],
            [
                'address_codeaddress' => 1,
                'status_codestatus' => 1,
                'codeprovider' => 2,
                'nameprovider' => 'GRADIENT',
                'descriptionprovider' => '',
                'created_at' =>  new DateTime(),
                'update_at' => new DateTime()             
            ],
            [
                'address_codeaddress' => 1,
                'status_codestatus' => 1,
                'codeprovider' => 3,
                'nameprovider' => 'ACER',
                'descriptionprovider' => '',
                'created_at' =>  new DateTime(),
                'update_at' => new DateTime()             
            ],
            [
                'address_codeaddress' => 1,
                'status_codestatus' => 1,
                'codeprovider' => 4,
                'nameprovider' => 'CCE',
                'descriptionprovider' => '',
                'created_at' =>  new DateTime(),
                'update_at' => new DateTime()             
            ],
            [
                'address_codeaddress' => 2,
                'status_codestatus' => 1,
                'codeprovider' => 5,
                'nameprovider' => 'HP',
                'descriptionprovider' => '',
                'created_at' =>  new DateTime(),
                'update_at' => new DateTime()             
            ],
            [
                'address_codeaddress' => 3,
                'status_codestatus' => 1,
                'codeprovider' => 6,
                'nameprovider' => 'MOTOROLA',
                'descriptionprovider' => '',
                'created_at' =>  new DateTime(),
                'update_at' => new DateTime()             
            ],
            [
                'address_codeaddress' => 4,
                'status_codestatus' => 1,
                'codeprovider' => 7,
                'nameprovider' => 'MICROSOFT',
                'descriptionprovider' => '',
                'created_at' =>  new DateTime(),
                'update_at' => new DateTime()             
            ],
            [
                'address_codeaddress' => 5,
                'status_codestatus' => 1,
                'codeprovider' => 8,
                'nameprovider' => 'CCES',
                'descriptionprovider' => '',
                'created_at' =>  new DateTime(),
                'update_at' => new DateTime()             
            ]
          
        );

        DB::table('provider')->insert($data);
    }
}
