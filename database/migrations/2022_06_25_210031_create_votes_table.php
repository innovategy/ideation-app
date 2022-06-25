<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('account_id');
            $table->bigInteger('idea_id');
            $table->bigInteger('vote_power');
            $table->timestamp('cast_at');
            $table->json('complex_decision')->nullable();
            $table->boolean('yes_or_no')->nullable();
            $table->string('ip_address');
            $table->json('device_fingerprint');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
