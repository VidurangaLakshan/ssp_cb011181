<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('cart_id');

            $table->string('shipping_first_name');
            $table->string('shipping_last_name');
            $table->string('shipping_address');
            $table->string('shipping_post_code');
            $table->string('shipping_city');
            $table->string('shipping_mobile');

//            $table->string('billing_first_name');
//            $table->string('billing_last_name');
//            $table->string('billing_address');
//            $table->string('billing_post_code');
//            $table->string('billing_city');
//            $table->string('billing_mobile');
//            $table->float('billing_total');

            $table->string('status');
            $table->string('payment_status');
            $table->float('total');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
