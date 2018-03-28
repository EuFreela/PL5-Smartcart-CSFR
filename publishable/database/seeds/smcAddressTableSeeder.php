<?php

use Illuminate\Database\Seeder;

class smcAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address')->delete();

        $data = array(
                [
                    'codeaddress' => 1,
                    'ip' => '127.0.0.1',
                    'ddd' => 011,
                    'celphone' => '1-1111-1111',
                    'phone' => '1111-1111',
                    'image' => '',
                    'birthday' => date('Y-m-d'),
                    'cpf' => '12345678900', 
                    'cep' => '69036-110', 
                    'street' => 'Av. Brasil', 
                    'number' => 2971, 
                    'complement' => '',
                    'district' => 'Compensa I', 
                    'city' => 'Manaus', 
                    'state' => 'AM',
                    'country' => 'Brasil',
                    'created_at' =>  new DateTime(),
                    'updated_at' => new DateTime() 
                ],
                [                 
                    'codeaddress' => 2,   
                    'ip' => '127.0.0.1',
                    'ddd' => 012,
                    'celphone' => '2-2222-2222',
                    'phone' => '2222-2222',
                    'image' => '',
                    'birthday' => date('Y-m-d'),
                    'cpf' => '12345678900', 
                    'cep' => '69036-110', 
                    'street' => 'Av. Brasil', 
                    'number' => 2971, 
                    'complement' => '',
                    'district' => 'Compensa I', 
                    'city' => 'Manaus', 
                    'state' => 'AM',
                    'country' => 'Brasil',
                    'created_at' =>  new DateTime(),
                    'updated_at' => new DateTime() 
                ],
                [                   
                    'codeaddress' => 3,
                    'ip' => '127.0.0.1',
                    'ddd' => 013,
                    'celphone' => '3-3333-3333',
                    'phone' => '3333-3333',
                    'image' => '',
                    'birthday' => date('Y-m-d'),
                    'cpf' => '12345678900', 
                    'cep' => '69036-110', 
                    'street' => 'Av. Brasil', 
                    'number' => 2971, 
                    'complement' => '',
                    'district' => 'Compensa I', 
                    'city' => 'Manaus', 
                    'state' => 'AM',
                    'country' => 'Brasil',
                    'created_at' =>  new DateTime(),
                    'updated_at' => new DateTime() 
                ],
                [                     
                    'codeaddress' => 4,
                    'ip' => '127.0.0.1',
                    'ddd' => 014,
                    'celphone' => '4-4444-4444',
                    'phone' => '4444-4444',
                    'image' => '',
                    'birthday' => date('Y-m-d'),
                    'cpf' => '12345678900', 
                    'cep' => '69036-110', 
                    'street' => 'Av. Brasil', 
                    'number' => 2971, 
                    'complement' => '',
                    'district' => 'Compensa I', 
                    'city' => 'Manaus', 
                    'state' => 'AM',
                    'country' => 'Brasil',
                    'created_at' =>  new DateTime(),
                    'updated_at' => new DateTime() 
                ],
                [                     
                    'codeaddress' => 5,
                    'ip' => '127.0.0.1',
                    'ddd' => 015,
                    'celphone' => '5-5555-5555',
                    'phone' => '5555-5555',
                    'image' => '',
                    'birthday' => date('Y-m-d'),
                    'cpf' => '12345678900', 
                    'cep' => '69036-110', 
                    'street' => 'Av. Brasil', 
                    'number' => 2971, 
                    'complement' => '',
                    'district' => 'Compensa I', 
                    'city' => 'Manaus', 
                    'state' => 'AM',
                    'country' => 'Brasil',
                    'created_at' =>  new DateTime(),
                    'updated_at' => new DateTime() 
                ]
        );

        DB::table('address')->insert($data);
    }
}
