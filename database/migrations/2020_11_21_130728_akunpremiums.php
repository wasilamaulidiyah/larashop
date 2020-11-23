<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Akunpremiums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
			'akun_premia',
			function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('voucher');
                $table->boolean('is_required');
				$table->timestamps();
			}
		);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akunpremium');
    }
}
