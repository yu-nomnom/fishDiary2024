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
        Schema::create('fish_results', function (Blueprint $table) {
            $table->id();
            $table->integer('diary_id')->index()->comment('日記ID');
            $table->integer('point_id')->nullable()->comment('ポイントID');
            $table->double('length', 3,1)->nullabke()->comment('長さ(cm)');
            $table->integer('weight')->nullabke()->comment('重さ(g)');
            $table->string('lure', 200)->nullable()->comment('釣れたルアー');
            $table->time('catch_time')->nullable()->comment('釣れた時間');
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
        Schema::dropIfExists('fish_results');
    }
};
