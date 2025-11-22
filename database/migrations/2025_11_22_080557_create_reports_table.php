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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('reference_code')->unique()->nullable();
            $table->boolean('is_anonymous')->default(false);
            $table->string('title');
            $table->text('description');
            $table->string('address');
            $table->string('contact_phone', 20)->nullable();
            $table->dateTime('incident_time');
            $table->enum('status', ['pending', 'in_progress', 'resolved'])->default('pending');
            $table->enum('severity', ['low', 'medium', 'high'])->default('medium');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
