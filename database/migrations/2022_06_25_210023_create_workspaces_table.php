<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkspacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workspaces', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('organization_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('cover_photo_url');
            $table->string('icon_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workspaces');
    }
}
