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
        Schema::create('request', function (Blueprint $table) {
            $table->id()->foreign('Donate');
            $table->geometry('name', 'linestring');
            $table->geometry('phone', 'linestring');
            $table->geometry('address', 'linestring');
            $table->geometry('district', 'linestring');
            $table->geometry('blood', 'linestring');
            $table->integer('bag_quantity');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
