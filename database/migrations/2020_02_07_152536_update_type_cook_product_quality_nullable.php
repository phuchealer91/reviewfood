<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTypeCookProductQualityNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->integer('st_typeQuality_id')->nullable()->index()->default(0)->change();
            $table->integer('st_typeCook_id')->nullable()->index()->default(0)->change();
            $table->integer('st_typeProduct_id')->nullable()->index()->default(0)->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropColumn('st_typeQuality_id');
            $table->dropColumn('st_typeCook_id');
            $table->dropColumn('st_typeProduct_id');
        });
    }
}
