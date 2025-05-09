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
        Schema::create('documents_candidatures', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('candidature_id');
            $table->string('type_document');
            $table->string('chemin_document');
            $table->foreign('candidature_id')->references('id')->on('candidatures')->onDelete('cascade');
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
        Schema::dropIfExists('document_candidatures');
    }
};
