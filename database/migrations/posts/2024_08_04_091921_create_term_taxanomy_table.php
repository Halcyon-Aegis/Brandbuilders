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
        Schema::create('term_taxanomy', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('term_taxonomy_id');

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('term_taxonomy_id')->references('id')->on('term_taxonomy')->onDelete('cascade');

            $table->primary(['post_id', 'term_taxonomy_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('term_taxanomy');
    }
};
