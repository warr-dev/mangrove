<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('mode');
            $table->string('status')->default('pending');
            $table->decimal('amount');
            $table->boolean('cover_fees')->default(false);
            $table->string('gcash_number');
            $table->string('reference_number');
            $table->string('photo')->nullable();
            $table->string('transaction_type')->default('App\Models\Guest');
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
        Schema::dropIfExists('donations');
    }
}
