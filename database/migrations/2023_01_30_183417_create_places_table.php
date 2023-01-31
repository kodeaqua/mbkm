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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('category_id');
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('additional_description')->nullable();
            $table->foreignId('village_id');
            $table->decimal('latitude', $precision = 8, $scale = 5)->nullable();
            $table->decimal('longitude', $precision = 8, $scale = 5)->nullable();
            $table->boolean('is_village_mascot')->default(0);
            $table->boolean('has_online_store')->default(0);
            $table->boolean('has_smart_payment_support')->default(1);
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('places');
    }
};
