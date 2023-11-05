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
        Schema::create('parent_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_id_number')->nullable();
            $table->string('mother_id_number')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('mother_phone_number')->nullable();
            $table->enum('father_work', ['A', 'B', 'C', 'D', 'E'])->default('E')->nullable();
            $table->enum('mother_work', ['A', 'B', 'C', 'D', 'E'])->default('E')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_contacts');
    }
};
