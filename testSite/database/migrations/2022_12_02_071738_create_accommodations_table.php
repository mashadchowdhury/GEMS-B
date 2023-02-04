<?php
//acc
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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name_accommodation');
            $table->string('address',128);
            $table->string('email_accommodation',96);
            $table->string('room_type');
            $table->integer('number_of_rooms');
            $table->integer('number_of_beds');
            $table->boolean('ESS_support');
            $table->boolean('restaurant_available');
            $table->boolean('pets_allowed');
            $table->boolean('accessibility_available');
            $table->boolean('accessibility_wheelchair');
            $table->boolean('accessibility_walker');
            $table->string('region');
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
        Schema::dropIfExists('accommodations');
    }
};
