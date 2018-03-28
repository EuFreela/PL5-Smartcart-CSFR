<?php

use Illuminate\Database\Seeder;

class smcProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();

        $data = array(
            [
                'provider_codeprovider' => 1,
                'codeproduct' => 1,
                'barcodeproduct' => '1weDCRBB13F',
                'codefactoryproduct' => 'eewCDFRTB123',
                'brand_codebrand' => 1,
                'category_codecategory' => 1,
                'nameproduct' => '1Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
            [
                'provider_codeprovider' => 2,
                'codeproduct' => 2,
                'barcodeproduct' => '2rrrrDCRBB13F',
                'codefactoryproduct' => 'eerCDFRTB123',
                'brand_codebrand' => 2,
                'category_codecategory' => 1,
                'nameproduct' => '2Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
            [
                'provider_codeprovider' => 3,
                'codeproduct' => 3,
                'barcodeproduct' => '3rreDCRBB13F',
                'codefactoryproduct' => 'erCDFRTB123',
                'brand_codebrand' => 4,
                'category_codecategory' => 2,
                'nameproduct' => '3Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
            [
                'provider_codeprovider' => 4,
                'codeproduct' => 4,
                'barcodeproduct' => 'sdweDCRBB13F',
                'codefactoryproduct' => '23eewCDFRTB123',
                'brand_codebrand' => 4,
                'category_codecategory' => 1,
                'nameproduct' => '4Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
            [
                'provider_codeprovider' => 5,
                'codeproduct' => 5,
                'barcodeproduct' => 'drrrrDCRBB13F',
                'codefactoryproduct' => 'feerCDFRTB123',
                'brand_codebrand' => 5,
                'category_codecategory' => 1,
                'nameproduct' => '5Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
            [
                'provider_codeprovider' => 2,
                'codeproduct' => 6,
                'barcodeproduct' => 'rreDCRBB13F',
                'codefactoryproduct' => 'rerCDFRTB123',
                'brand_codebrand' => 5,
                'category_codecategory' => 2,
                'nameproduct' => '6Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
            [
                'provider_codeprovider' => 3,
                'codeproduct' => 7,
                'barcodeproduct' => 'fdDCRBB13F',
                'codefactoryproduct' => 'cvCDFRTB123',
                'brand_codebrand' => 5,
                'category_codecategory' => 1,
                'nameproduct' => '7Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
            [
                'provider_codeprovider' => 4,
                'codeproduct' => 8,
                'barcodeproduct' => 'xcDCRBB13F',
                'codefactoryproduct' => 'xcCDFRTB123',
                'brand_codebrand' => 6,
                'category_codecategory' => 1,
                'nameproduct' => '8Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
            [
                'provider_codeprovider' => 4,
                'codeproduct' => 9,
                'barcodeproduct' => 'asDCRBB13F',
                'codefactoryproduct' => 'asCDFRTB123',
                'brand_codebrand' => 5,
                'category_codecategory' => 1,
                'nameproduct' => '9Suspendisse in ipsum',
                'especificationproduct' => 'Aliquam feugiat vitae tellus rutrum malesuada',
                'descriptionproduct' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum pharetra leo, vitae blandit justo aliquam eu. Praesent mauris lorem, tempus sit amet tincidunt in, pretium quis massa. Donec a auctor dolor, dapibus tincidunt diam. Donec cursus rhoncus eros in vulputate. Fusce quis blandit arcu.',
                'imgproduct' => 'https://http2.mlstatic.com/teclado-gamer-suspenso-usb-silencioso-e-confortavel-wb-711-D_NQ_NP_945900-MLB26377958677_112017-F.jpg',
                'created_at' =>  new DateTime(),
                'updated_at' => new DateTime()              
            ],
        );

        DB::table('product')->insert($data);
    }
}
