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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->string('name');
            $table->string('lastname');
            $table->integer('CIN');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('vendeur', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->string('name');
            $table->string('lastname');
            $table->integer('CIN');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::create('fournisseur', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->string('name');
            $table->string('lastname');
            $table->integer('CIN');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('vendeurs');
        Schema::dropIfExists('fournisseurs');
    }
};
