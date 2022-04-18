<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailbleServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availble_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fix_plain_id')->nullable()->default(12);
            $table->string('s1', 400)->nullable()->default('text');
            $table->string('s2', 400)->nullable()->default('text');
            $table->string('s3', 400)->nullable()->default('text');
            $table->string('s4', 400)->nullable()->default('text');
            $table->string('s5', 400)->nullable()->default('text');
            $table->string('s6', 400)->nullable()->default('text');
            $table->string('s7', 400)->nullable()->default('text');
            $table->string('s8', 400)->nullable()->default('text');
            $table->string('s9', 400)->nullable()->default('text');
            $table->string('s10', 400)->nullable()->default('text');
            $table->string('s11', 400)->nullable()->default('text');
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
        Schema::dropIfExists('availble_services');
    }
}
