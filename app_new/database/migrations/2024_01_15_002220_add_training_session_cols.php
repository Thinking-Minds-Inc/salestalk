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
            //
            $table->unsignedBigInteger('icp_id')->nullable();
            $table->foreign('icp_id')->references('id')->on('icp_options')->onDelete('SET NULL');

            $table->unsignedBigInteger('voice_id')->nullable();
            $table->foreign('voice_id')->references('id')->on('voice_options')->onDelete('SET NULL');

            $table->unsignedBigInteger('tone_id')->nullable();
            $table->foreign('tone_id')->references('id')->on('tone_options')->onDelete('SET NULL');

            $table->unsignedBigInteger('conversation_scenario_id')->nullable();
            $table->foreign('conversation_scenario_id')->references('id')->on('conversation_scenario_options')->onDelete('SET NULL');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('training_sessions', function (Blueprint $table) {
            //
        });
    }
};
