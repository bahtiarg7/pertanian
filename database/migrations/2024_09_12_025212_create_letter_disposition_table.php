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
        Schema::create('letter_disposition', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('letter_id');
            $table->unsignedBigInteger('disposition_id');
            $table->unsignedBigInteger('recipient_id');
            $table->unsignedBigInteger('sender_id');
            $table->string('description')->nullable();
            $table->enum('recipient_status',['W','A','R'])->default('W');
            $table->integer('stages')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_disposition');
    }
};
