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
            $table->id();
            $table->string('reference_user', 100)->nullable(true); // Longueur de 100 caractères
            $table->string('prenom', 100)->nullable(false); // Longueur de 100 caractères
            $table->string('nom', 100)->nullable(false); // Longueur de 100 caractères
            $table->string('telephone', 20)->unique()->nullable(false); // Longueur de 20 caractères
            $table->boolean('est_active')->default(true);
            $table->string('civilite', 50)->default('autre'); // Longueur de 50 caractères
            $table->date('date_naissance')->nullable()->default('9999-12-31');//date
            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
