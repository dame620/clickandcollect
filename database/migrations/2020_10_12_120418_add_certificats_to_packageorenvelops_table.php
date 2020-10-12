<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCertificatsToPackageorenvelopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packageorenvelops', function (Blueprint $table) {
            $table->boolean('is_nophytho');
            $table->boolean('is_phythoexiste');
            $table->boolean('is_phytho_your_own');
            $table->boolean('is_phytho_provide_tosma');
            $table->boolean('is_origincertificat');
            $table->boolean('is_noorigincertificat');
            $table->boolean('is_origin_certificat_your_own');
            $table->boolean('is_origin_certificat_provide_to_sma');
            
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
            $table->dropColumn('is_nophytho');
            $table->dropColumn('is_phythoexiste');
            $table->dropColumn('is_phytho_your_own');
            $table->dropColumn('is_phytho_provide_tosma');
            $table->dropColumn('is_origincertificat');
            $table->dropColumn('is_noorigincertificat');
            $table->dropColumn('is_origin_certificat_your_own');
            $table->dropColumn('is_origin_certificat_provide_to_sma');
        });
    }
}
