<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleClassersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('schedule_classers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('Classer_id')->constrained();
            $table->timestamp('enrollment_date')->nullable();
            $table->timestamp('withdrawl_date')->nullable();
            $table->integer('withdrawl_id')->nullable();
            $table->timestamp('created_date')->nullable();
            $table->timestamp('created_by')->nullable();
            $table->timestamp('last_modified_date')->nullable();
            $table->timestamp('modified_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_classers');
    }
}
