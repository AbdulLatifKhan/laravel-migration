<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_data',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('roll', 30);
            $table->binary('photo');
            $table->char('address',200);
            $table->text('description');
            $table->timestamp('added_at', $precision = 0);
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
};
