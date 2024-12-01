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
        Schema::create('diaries', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200)->comment('タイトル');
            $table->integer('field_id')->index()->comment('釣り場ID');
            // $table->integer('fish_result_id')->index()->comment('釣果ID');
            $table->timestamp('start_time')->nullable()->comment('釣り開始時間');
            $table->timestamp('end_time')->nullable()->comment('釣り終了時間');
            $table->string('season', 50)->nullable()->comment('季節');
            $table->string('weather', 50)->nullable()->comment('天気');
            $table->integer('lowest_temperature')->nullable()->comment('最低気温');
            $table->integer('highest_temperature')->nullable()->comment('最高気温');
            $table->double('lowest_water_temperature', 3, 1)->nullable()->comment('最低水温');
            $table->double('highest_water_temperature', 3, 1)->nullable()->comment('最高水温');
            // $table->integer('start_water_level')->nullable()->comment('開始時水位(cm)');
            // $table->integer('end_water_level')->nullable()->comment('終了時水位(cm)');
            $table->string('tide', 50)->nullable()->comment('潮(大潮〜小潮まで)');
            $table->boolean('competition_flg')->default(false)->comment('試合フラグ');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate()->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diaries');
    }
};
