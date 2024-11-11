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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Name of the tour package
            $table->text('description'); // Detailed description
            $table->decimal('price', 8, 2); // Price with precision and scale
            $table->integer('duration'); // Duration in days
            $table->date('start_date'); // Start date of the package
            $table->date('end_date')->nullable(); // Optional end date
            $table->integer('max_participants'); // Maximum number of participants
            $table->boolean('is_active')->default(true); // Status of the package
            $table->timestamps(); // Created at and updated at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_packages');
    }
};
