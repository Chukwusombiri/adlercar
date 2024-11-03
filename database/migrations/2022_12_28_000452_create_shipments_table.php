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
        Schema::create('shipments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->string('product_type');
            $table->string('items');
            $table->float('size');
            $table->enum('mos',['road','rail','air','sea']);
            $table->string('departure');
            $table->string('arrival');
            $table->string('receiver');
            $table->string('receiver_email');
            $table->string('payment_method');
            $table->string('cos')->nullable();
            $table->timestamp('arrival_date')->nullable();        
            $table->boolean('is_approved')->default(0);
            $table->enum('status',['unapproved','on-hold','on-transit','completed'])->default('unapproved');
            $table->string('current_location')->nullable();
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
        Schema::dropIfExists('shipments');
    }
};
