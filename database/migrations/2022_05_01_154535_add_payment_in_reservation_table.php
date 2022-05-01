<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentInReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->string('gcash_account_name');
            $table->string('gcash_number');
            $table->string('reference_number');
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->dropColumn(['gcash_account_name','gcash_number','reference_number','photo']);
        });
    }
}
