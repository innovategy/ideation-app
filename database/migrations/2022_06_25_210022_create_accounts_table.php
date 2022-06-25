<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->uuid('uuid');
            $table->string('state');
            $table->date('birth_date')->nullable();
            $table->bigInteger('account_level')->nullable();
            $table->bigInteger('account_score')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->string('profile_photo_url')->nullable();
            $table->bigInteger('city_id')->nullable();
            $table->json('registration_device_fingerprint');
            $table->string('registration_ip_address');
            $table->string('acceptance_of_toc');
            $table->string('marketing_message_consent');
            $table->bigInteger('invited_by');
            $table->timestamp('last_active')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
