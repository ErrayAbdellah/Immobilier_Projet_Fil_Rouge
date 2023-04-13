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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('price');
            $table->integer('space');
            $table->integer('Bedrooms');
            $table->string('description');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('category_id')->constrained('categorys')->onDelete('cascade');
            // $table->foreignId('outdoorFeature_id')->constrained('outdoorFeatures')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
};
