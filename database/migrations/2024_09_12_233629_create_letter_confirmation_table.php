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
        Schema::create('letter_confirmation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('letter_disposition_id');
            $table->unsignedBigInteger('users_id');
            $table->string('description')->nullable();
            $table->enum('recipient_status',['W','A','R'])->default('W');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_confirmation');
    }
};
