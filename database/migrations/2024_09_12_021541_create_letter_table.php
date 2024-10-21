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
        Schema::create('letter', function (Blueprint $table) {
            $table->id();
            $table->string('no_letter'); // Sender's name or email
            $table->date('date_entry'); // Date entry
            $table->string('subject'); // Subject letter
            $table->string('origin'); // Origin
            $table->date('date_receipt'); // Receive letter
            $table->string('document'); // Recipient's name or email
            $table->enum('disposition_status',['N','Y'])->default('N'); // Status of the letter (e.g., draft, sent, archived)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter');
    }
};
