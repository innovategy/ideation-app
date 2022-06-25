<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->integer('legal_form');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('registration_number')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('tax_identifier')->nullable();
            $table->boolean('is_vat_liable')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email_address')->nullable();
            $table->json('billing_address')->nullable();
            $table->json('visiting_address')->nullable();
            $table->bigInteger('authorized_person_account_id')->nullable();
            $table->string('logo_url')->nullable();
            $table->json('brand_config')->nullable();
            $table->text('custom_disclaimer')->nullable();
            $table->string('website')->nullable();
            $table->json('social_media_urls')->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
