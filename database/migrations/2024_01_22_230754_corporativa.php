<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('corporativa', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->integer('profile_id')->unsigned();
            $table->enum('cargo', ['dev jr', 'dev pleno', 'dev senior']);
            $table->enum('funcao', ['dev jr', 'dev pleno', 'dev senior']);
            $table->string('tipo_de_tecnologia');
            $table->string('empresa');
            $table->string('modalidade');
            $table->decimal('salario');
            //$table->foreign('profile_id')->references('id')->on('profile')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporativa');
    }
};
