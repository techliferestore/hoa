<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlainTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plain_types', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fix_plain_id')->nullable()->default(12);
        $table->string('plain_type_name', 100)->nullable()->default('text');
$table->smallInteger('plain_price')->nullable()->default(12);
$table->string('plain_title', 100)->nullable()->default('text');
$table->string('plain_des', 300)->nullable()->default('text');

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
        Schema::dropIfExists('plain_types');
    }
}
