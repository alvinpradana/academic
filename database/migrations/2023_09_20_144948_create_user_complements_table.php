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
            $table->string('name');
            $table->string('id_number');
            $table->string('nip_number');
            $table->enum('gender', ['male', 'female']);
            $table->string('birth_date_place');
            $table->double('age');
            $table->double('from_school');
            $table->double('last_report_value');
            $table->enum('religion', ['islam', 'kristen', 'hindu', 'budha', 'lainnya']);
            $table->text('image')->nullable();
            $table->unsignedBigInteger('phone_number');
            $table->string('address');
            $table->enum('status', ['active', 'inactive'])->default('active');
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
