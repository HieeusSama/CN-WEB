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
        Schema::create('issues', function (Blueprint $table) {
            
            $table->id();
            $table->integer('computer_id');
            $table->string('reported_by', 50);
            $table->date('reported_date');
            $table->string('description');
            $table->enum('urgency', ['Low', 'Medium', 'High'])->default('Low');
            $table->enum('status', ['Open', 'In Progress', 'Resolved'])->default('Open'); // Default value here
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
