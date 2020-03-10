<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function ($table){
            $table->bigInteger('contact_number')->nullable();
            $table->string('occupation', 100)->nullable();
            $table->string('profile_picture', 100)->nullable();
            $table->integer('votes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function ($table){
            $table->dropColumn('contact_number');
            $table->dropColumn('occupation');
            $table->dropColumn('profile_picture');
        });
    }
}
