<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShipmentIdToPackageorenvelopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packageorenvelops', function (Blueprint $table) {
            $table->unsignedBigInteger('shipment_id');
            $table->index('shipment_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packageorenvelops', function (Blueprint $table) {
            $table->dropColumn('shipment_id');
        });
    }
}
