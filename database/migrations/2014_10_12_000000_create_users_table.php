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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->unsignedTinyInteger('is_super_admin')->default(0);
            $table->unsignedTinyInteger('is_admin')->default(0);
            $table->string('status')->default('active');
            $table->string('number')->nullable();
            $table->string('address')->nullable();
            $table->string('county')->nullable();
            $table->string('city')->nullable();
            $table->string('post_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
