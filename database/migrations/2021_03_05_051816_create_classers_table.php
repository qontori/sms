<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('classers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('school_id')->nullable()->constrained();
            $table->foreignId('grade_id')->nullable()->constrained();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
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
        Schema::dropIfExists('classers');
    }
}
