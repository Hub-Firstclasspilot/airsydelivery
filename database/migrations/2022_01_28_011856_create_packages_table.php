<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string("tracking_id")->unique();
            $table->string("type");
            $table->float("weight");
            $table->string("sender_name");
            $table->string("sender_phone")->nullable();
            $table->string("sender_email")->nullable();
            $table->string("sender_location");
            $table->string("receiver_name");
            $table->string("receiver_phone")->nullable();
            $table->string("receiver_email")->nullable();
            $table->string("receiver_location");
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
        Schema::dropIfExists('packages');
    }
}
