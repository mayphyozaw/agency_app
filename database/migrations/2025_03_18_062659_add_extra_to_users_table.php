<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('gender')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('nrc')->nullable();
            $table->text('photo')->nullable();
            $table->text('nrcphoto')->nullable();
            $table->text('frontphoto')->nullable();
            $table->text('backphoto')->nullable();
            $table->text('householderphoto')->nullable();
            $table->date('joindate')->nullable();
            $table->unsignedBigInteger('role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
