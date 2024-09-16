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
        Schema::create('seles', function (Blueprint $table) {
            $table->id();
            $table->string('trans', 50);
            $table->date('trans_date');
            $table->bigInteger('trans_total_price');
            $table->bigInteger('trans_paid');
            $table->bigInteger('trans_change');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seles');
    }
};
