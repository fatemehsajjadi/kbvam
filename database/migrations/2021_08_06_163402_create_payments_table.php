<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->bigInteger('shenasname')->nullable();
            $table->bigInteger('idcard')->nullable();
            $table->bigInteger('mostamari')->nullable();
            $table->string('mobile')->nullable();
            $table->string('card_number')->nullable();
            $table->date('card_expire_date')->nullable();
            $table->string('authority')->nullable()->index();
            $table->string('reference_id')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('is_used')->default(0);
            $table->tinyInteger('payment_status')->default(0); // 1 wating 2 cancel 3 success
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
        Schema::dropIfExists('payments');
    }
}
