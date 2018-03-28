<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('idaddress');
            $table->integer('codeaddress');
            $table->string('ip');
            $table->integer('ddd')->nullable(false);
            $table->string('celphone',11)->nullable(false);
            $table->string('phone',9)->nullable(false);            
            $table->string('image')->nullable(true);
            $table->string('birthday')->nullable(false);
            $table->string('cpf',11)->nullable(false);            
            $table->string('cep',10)->nullable(true);
            $table->string('street',60)->nullable(true);
            $table->integer('number')->nullable(true);
            $table->string('complement',60)->nullable(true);
            $table->string('district',60)->nullable(true);
            $table->string('city',60)->nullable(true);
            $table->string('state',3)->nullable(true);
            $table->string('country',60)->nullable(false); 
            $table->timestamps();

            $table->index('codeaddress');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
