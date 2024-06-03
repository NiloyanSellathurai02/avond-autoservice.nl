<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('phone');
            $table->string('daytime_hours');
            $table->string('evening_hours');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_details');
    }
}
