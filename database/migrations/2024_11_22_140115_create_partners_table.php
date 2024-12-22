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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('restaurant_address');
            $table->string('business_phone');
            $table->string('email_address');
            $table->string('website')->nullable();
            $table->string('contact_name');
            $table->string('position');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('food_type');
            $table->string('surplus_food');
            $table->string('pickup_schedule');
            $table->boolean('checkbox1')->default(false);
            $table->boolean('checkbox2')->default(false);
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
        Schema::dropIfExists('partners');
    }
};
