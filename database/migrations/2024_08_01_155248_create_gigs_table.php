<?php

use App\Enums\GigStatus;
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
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('address_road')->nullable();
            $table->string('address_suburb')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_region')->nullable();
            $table->json('coordinates')->nullable();
            $table->string('initial_price');
            $table->string('final_price')->nullable();
            $table->string('status')->default(GigStatus::Pending);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gigs');
    }
};
