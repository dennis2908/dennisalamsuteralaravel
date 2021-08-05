x`<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torders', function (Blueprint $table) {
            $table->id();
			$table->integer('customer_id');
			$table->string('arr_brg');
            $table->string('arr_price');
            $table->string('arr_qty');
			$table->string('arr_tot');
			$table->string('tot_byr');
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
        Schema::dropIfExists('torders');
    }
}
