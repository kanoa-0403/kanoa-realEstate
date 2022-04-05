<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('lastname')->comment('名');
            $table->string('firstname')->comment('性');
            $table->string('lastname_kana')->comment('セイ');
            $table->string('firstname_kana')->comment('メイ');
            $table->string('sex')->comment('性別');
            $table->date('birth_date')->comment('生年月日');
            $table->string('email')->comment('メールアドレス');
            $table->string('phone_number')->comment('電話番号');
            $table->string('postcode')->comment('住所(郵便番号)');
            $table->string('prefecture')->comment('住所(都道府県)');
            $table->string('city')->comment('住所(市区町村)');
            $table->string('block')->comment('住所(番地・建物名・部屋番号)');
            $table->string('password')->unique()->comment('パスワード');
            $table->string('profile_img')->comment('プロフィール画像');
            $table->text('profile')->comment('プロフィール');
            $table->tinyInteger('role')->comment('役職');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
