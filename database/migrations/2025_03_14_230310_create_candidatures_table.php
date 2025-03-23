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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('candidat_id');
            $table->uuid('bien_id');
            $table->enum('statut', ['en_attente', 'validé', 'rejeté']);
            $table->foreign('candidat_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bien_id')->references('id')->on('biens')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
};
