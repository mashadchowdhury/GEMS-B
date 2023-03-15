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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name_group');
            $table->boolean('booked');
            $table->string('accommodation');
            $table->string('name_primary_contact');
            $table->string('telephone_primary_contact', 32);
            $table->string('email_primary_contact',96);
            $table->string('name_secondary_contact');
            $table->string('telephone_secondary_contact', 32);
            $table->string('email_secondary_contact',96);
            $table->boolean('is_ESS_group');
            $table->integer('group_count');
            $table->integer('adult_count');
            $table->integer('children_count');
            $table->integer('pet_count');
            $table->boolean('need_accessibility');
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
        Schema::dropIfExists('groups');
    }
};
