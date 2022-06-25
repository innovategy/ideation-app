<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('slug')->unique();
            $table->string('uiid');
            $table->string('title');
            $table->string('target_audience');
            $table->string('value_proposition')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->string('short_description');
            $table->string('long_description')->nullable();
            $table->string('video_url')->nullable();
            $table->string('icon_url')->nullable();
            $table->string('cover_photo_url')->nullable();
            $table->integer('visibility_level');
            $table->boolean('is_voting_open');
            $table->timestamp('voting_start_time')->nullable();
            $table->timestamp('voting_end_time')->nullable();
            $table->bigInteger('is_revision_of_idea_id')->nullable();
            $table->bigInteger('is_clone_of_idea_id')->nullable();
            $table->bigInteger('idea_score')->nullable();
            $table->boolean('is_registered');
            $table->string('registration_url')->nullable();
            $table->boolean('is_complex_decision');
            $table->bigInteger('workspace_id');
            $table->integer('language_id')->nullable();
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
        Schema::dropIfExists('ideas');
    }
}
