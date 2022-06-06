<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwtAndIgToVillagePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('village_pages', function (Blueprint $table) {
            $table->string('twt')->nullable();
            $table->string('ig')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('village_pages', function (Blueprint $table) {
            $table->dropColumn(['twt', 'ig']);
        });
    }
}
