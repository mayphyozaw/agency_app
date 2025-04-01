<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraToLaborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('labors', function (Blueprint $table) {
            $table->date('reject_date');
            $table->text('reject_reason')->nullable();
            $table->enum('status', ['reject'])->default('reject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('labors', function (Blueprint $table) {
            //
        });
    }
}
