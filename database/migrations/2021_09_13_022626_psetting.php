<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Psetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psetting', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('book_id');
            $table->string('a',500);
            $table->text('b');
            $table->text('c');
            $table->text('d');
            $table->text('e');
            $table->text('doc');
            $table->text('price');

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
        //
    }
}
