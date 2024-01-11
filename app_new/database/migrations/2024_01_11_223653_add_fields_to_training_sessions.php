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
        Schema::table('training_sessions', function (Blueprint $table) {
            $table->string("icp");
            $table->string("voice");
            $table->string("tone");
            $table->string("conversation_scenario");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('training_sessions', function (Blueprint $table) {
            $table->dropColumn("icp");
            $table->dropColumn("voice");
            $table->dropColumn("tone");
            $table->dropColumn("conversation_scenario");
        });
    }
};
