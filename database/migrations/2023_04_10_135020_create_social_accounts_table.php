<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialAccountsTable extends Migration {

    public function up()
    {
        Schema::create('social_accounts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('provider_user_id');
            $table->string('provider');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('social_accounts');
    }
}