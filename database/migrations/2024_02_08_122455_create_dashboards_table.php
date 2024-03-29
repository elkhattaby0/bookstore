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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->float('price');
            $table->text('details');
            $table->softDeletes();
            $table->unsignedBigInteger('language_id')->foreign('language_id')->references('id')->table('languages');
            $table->unsignedBigInteger('catigory_id')->foreign('catigory_id')->references('id')->table('categories');
            $table->unsignedBigInteger('user_id')->foreign('user_id')->references('id')->table('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboards');
    }
};
