<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('pickuppostalCode')->nullable();
            $table->string('pickupcityName')->nullable();
            $table->string('pickupcountryCode')->nullable();
            $table->string('pickupaddressLine1')->nullable();
            $table->string('pickupcountyName')->nullable();
            $table->string('pickupemail')->nullable();
            $table->string('pickupphone')->nullable();
            $table->string('pickupmobilePhone')->nullable();
            $table->string('pickupcompanyName')->nullable();
            $table->string('pickupfullName')->nullable();

            $table->string('receiverpostalCode')->nullable();
            $table->string('receivercityName')->nullable();
            $table->string('receivercountryCode')->nullable();
            $table->string('receiveraddressLine1')->nullable();
            $table->string('receivercountyName')->nullable();
            $table->string('receiveremail')->nullable();
            $table->string('receiverphone')->nullable();
            $table->string('receivermobilePhone')->nullable();
            $table->string('receivercompanyName')->nullable();
            $table->string('receiverfullName')->nullable();


            $table->string('shipperpostalCode')->nullable();
            $table->string('shippercityName')->nullable();
            $table->string('shippercountryCode')->nullable();
            $table->string('shipperaddressLine1')->nullable();
            $table->string('shippercountyName')->nullable();
            $table->string('shipperemail')->nullable();
            $table->string('shipperphone')->nullable();
            $table->string('shippermobilePhone')->nullable();
            $table->string('shippercompanyName')->nullable();
            $table->string('shipperfullName')->nullable();
        
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
        Schema::dropIfExists('shipments');
    }
}
