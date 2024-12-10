<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Vinkas\Singapore\Support\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained();
            $table->string('key', length: 6);
            $table->string('name');
            $table->string('slug');
            $table->string('zh_name')->nullable();
            $table->string('ta_name')->nullable();
            $table->decimal('latitude', total: 8, places: 6)->nullable();
            $table->decimal('longitude', total: 9, places: 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
