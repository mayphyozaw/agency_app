<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labors', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('photo')->nullable();
            $table->text('gender')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('nrc')->nullable();
            $table->text('nrc_front_photo')->nullable();
            $table->text('nrc_back_photo')->nullable();
            $table->text('father_name')->nullable();
            $table->text('mother_name')->nullable();
            $table->text('qualification')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('age')->nullable();
            $table->text('passport_number')->nullable();
            $table->text('passport_issue_date')->nullable();
            $table->text('passport_expired_date')->nullable();
            $table->text('passport_place')->nullable();
            $table->text('owic_card_number')->nullable();
            $table->text('owic_card_issue_date')->nullable();
            $table->text('owic_card_submit_date')->nullable();
            $table->text('weight')->nullable();
            $table->text('height')->nullable();
            $table->text('tattoo')->nullable();
            $table->text('smoking')->nullable();
            $table->text('alcohol')->nullable();
            $table->text('nation_religion')->nullable();
            $table->text('prominent_sign')->nullable();
            $table->text('working_experience')->nullable();
            $table->text('apply_county')->nullable();
            $table->text('agents')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('labors');
    }
}
