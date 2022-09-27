<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->enum('status',['Bueno','Regular','Malo']);
            $table->enum('brand',['HP','Lenovo','Dell','Asus']);
            $table->string('accesories');
            $table->enum('type',['Portatil','Escritorio','Todo en Uno']);
            $table->enum('environment',['Ambiente 1', 'Ambiente 2']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
};
