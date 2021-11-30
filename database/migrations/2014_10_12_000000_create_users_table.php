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
            $table->id();
            $table->string("phone");
            $table->string('email')->unique();
            $table->string("seo_url")->nullable();
            $table->string('password');
            $table->string("title");
            $table->json("urls")->nullable();
            $table->string("logo")->nullable();
            $table->longText("about")->nullable();
            $table->enum("role",\App\Models\User::ROLES)->default(\App\Models\User::ROLE_COMPANY);
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
