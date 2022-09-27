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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained();
            $table->foreignId('apprentice_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->date('loan_date');
            $table->enum('loan_status',['Bueno','Regular','Malo']);
            $table->date('return_date');
            $table->enum('return_status',['Bueno','Regular','Malo']);
            $table->text('comments');
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
        Schema::dropIfExists('loans');
    }
};
