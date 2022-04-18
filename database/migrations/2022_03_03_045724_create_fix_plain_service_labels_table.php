<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixPlainServiceLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fix_plain_service_labels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fix_plain_id');
            $table->string('service_label', 300)->nullable()->default('text');

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
        Schema::dropIfExists('fix_plain_service_labels');
    }
}
