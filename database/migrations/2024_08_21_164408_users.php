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
            $table->id(); //main key
            $table->foreign(string(column:'プロフィールID'))->unique()
            ->reference('プロフィールID')->on('keijiban');
            $table->string(column:'name')->unique();
            $table->string(column:'email')->unique();
            $table->string(column:'password');
            $table->string(column:'自己pr');
            $table->string(column:'職種');
            $table->string(column:'勤務地');
            $table->string(column:'希望収入');
            $table->string(column:'習得言語');
            $table->timestamps();
        });

        Schema::create('keijiban', function (Blueprint $table) {
            $table->id(); //主键id
            $table->string(column:'keijibanID')->unique();
            $table->string(column:'タイトル');
            $table->string(column:'プロフィールID');
            $table->timestamps();
        });

        Schema::create('sutoredo', function (Blueprint $table) {
            $table->id(); //主键id
            $table->string(column:'kakikomiID')->unique();
            $table->string(column:'プロフィールID');
            $table->string(column:'keijibanID');
            $table->string(column:'内容');
            $table->timestamps();
        });

        Schema::create('kigyo', function (Blueprint $table) {
            $table->id(); //主键id
            $table->string(column:'企業名')->unique();
            $table->string(column:'プロフィールID');
            $table->string(column:'拠点地');
            $table->string(column:'平均年収');
            $table->string(column:'募集職種');
            $table->string(column:'企業PR');
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
