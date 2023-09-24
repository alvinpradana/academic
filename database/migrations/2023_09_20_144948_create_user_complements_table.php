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
        Schema::create('user_complements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('user_position_id')->constrained('user_positions')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('nip_number')->nullable();
            $table->enum('gender', ['A', 'B', 'C'])->default('C');
            $table->string('birth_date_place')->nullable();
            $table->double('age')->nullable();
            $table->enum('religion', ['A', 'B', 'C', 'D', 'E'])->default('E');
            $table->text('image')->nullable();
            $table->unsignedBigInteger('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('regency')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_complements');
    }
};
