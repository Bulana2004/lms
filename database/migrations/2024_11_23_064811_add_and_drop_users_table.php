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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_types');
            $table->unsignedBigInteger('idno');
            $table->string('address');
            $table->date('birthday');
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_active')->default(0);
            $table->string('telno');

            $table->foreign('user_types')->references('id')->on('user_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('user_types');
            $table->dropColumn('idno');
            $table->dropColumn('address');
            $table->dropColumn('birthday');
            $table->dropColumn('is_admin');
            $table->dropColumn('is_active');
            $table->dropColumn('telno');
        });
    }
};
