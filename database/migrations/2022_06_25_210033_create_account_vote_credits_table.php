<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountVoteCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_vote_credits', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('account_id');
            $table->timestamp('expiry_date');
            $table->string('vote_credit_hash');
            $table->boolean('is_used');
            $table->timestamp('usage_time')->nullable();
            $table->bigInteger('vote_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_vote_credits');
    }
}
