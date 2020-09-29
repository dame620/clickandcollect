<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDestinationsToPackageorenvelopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packageorenvelops', function (Blueprint $table) {
            $table->string('origincountry')->nullable();
            $table->string('originregion')->nullable();
            $table->string('destinationcountry')->nullable();
            $table->string('destinationregion')->nullable();
            
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
            $table->dropColumn('origincountry');
            $table->dropColumn('originregion');
            $table->dropColumn('destinationcountry');
            $table->dropColumn('destinationregion');
        });
    }
}
