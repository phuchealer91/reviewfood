<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateActiveTableAreasTypeCookProductQuality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->tinyInteger('ar_active')->default(1)->index();
        });
        Schema::table('type_cooks', function (Blueprint $table) {
            $table->tinyInteger('tc_active')->default(1)->index();
        });
        Schema::table('type_products', function (Blueprint $table) {
            $table->tinyInteger('tp_active')->default(1)->index();
        });
        Schema::table('type_qualitys', function (Blueprint $table) {
            $table->tinyInteger('tq_active')->default(1)->index();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->dropColumn('ar_active');
        });
        Schema::table('type_cooks', function (Blueprint $table) {
            $table->dropColumn('tc_active');
        });
        Schema::table('type_products', function (Blueprint $table) {
            $table->dropColumn('tp_active');
        });
        Schema::table('type_qualitys', function (Blueprint $table) {
            $table->dropColumn('tq_active');
        });
    }
}
