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
        // Questo andrà a creare la tabella  nel database tramite il comando :php artisan:migrate refresh nel terminale

        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name',32)->notnullable();
            $table->string('lastname')->notnullable();
            $table->date('date_of_birth')->notnullable();
            $table->decimal('height')->unsigned();
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
        Schema::dropIfExists('people');
    }
};
