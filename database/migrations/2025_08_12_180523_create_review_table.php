<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->string('comment')->nullable();
            $table->unsignedTinyInteger('rating')->default(0)->comment('Rating from 1 to 5');
            $table->unsignedBigInteger('auction_item_id')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('auction_item_id')->references('id')->on('auction_items')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
