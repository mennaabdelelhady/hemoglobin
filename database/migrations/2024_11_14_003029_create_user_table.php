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
        Schema::create('user', function (Blueprint $table) {
            $table->id()->foreign('Donate');
            $table->geometry('name', 'linestring');
            $table->geometry('email', 'linestring');
            $table->geometry('password', 'linestring');
            $table->integer('role');
            $table->geometry('blood', 'linestring');
            $table->geometry('phone', 'linestring');
            $table->geometry('address', 'linestring');
            $table->geometry('district', 'linestring');
            $table->date('date_of_birth');
            $table->date('last_donate_date');
            $table->geometry('photo', 'linestring');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
