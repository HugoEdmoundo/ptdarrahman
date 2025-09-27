<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('murid'); // superadmin, admin, guru, murid
            $table->string('nip')->nullable(); // untuk guru
            $table->string('nisn')->nullable(); // untuk murid
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role','nip','nisn']);
        });
    }
};
