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
        //データベースからユーザーIDと企業IDを引っ張るためのコード
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string(column:'自己pr')->nullable();
            $table->string(column:'職種')->nullable();
            $table->string(column:'勤務地')->nullable();
            $table->string(column:'希望収入')->nullable();
            $table->string(column:'習得言語')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        // データベースから企業IDを引っ張るためのコード
        Schema::create('keijiban', function (Blueprint $table) {
            $table->id(); //主键id
            $table->string(column:'keijibanID')->unique();
            $table->string(column:'タイトル');
            $table->string(column:'プロフィールID');
            $table->timestamps();
        });
        // データベースから企業IDを引っ張るためのコード
        Schema::create('sutoredo', function (Blueprint $table) {
            $table->id(); //主键id
            $table->string(column:'kakikomiID')->unique();
            $table->string(column:'プロフィールID');
            $table->string(column:'keijibanID');
            $table->text(column:'内容');
            $table->timestamps();
        });
        // データベースから企業情報を引っ張るためのコード
        Schema::create('kigyo', function (Blueprint $table) {
            $table->id(); //主键id
            $table->string(column:'name')->unique();
            $table->string(column:'プロフィールID');
            $table->string(column:'拠点地');
            $table->string(column:'平均年収');
            $table->string(column:'募集職種');
            $table->text(column:'企業PR');
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
