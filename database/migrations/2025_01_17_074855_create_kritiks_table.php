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
        Schema::create('kritiks', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id')->references('id')->on('users'); 
            $table->foreignid('movies_id')->reference('id')->on('movies');
            $table->text('content');
            $table->text('point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritiks');
    }
};
