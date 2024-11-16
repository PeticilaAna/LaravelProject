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
        Schema::create('dealers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('CEC');
            $table->string('CUI');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('dealers');
    }
};
