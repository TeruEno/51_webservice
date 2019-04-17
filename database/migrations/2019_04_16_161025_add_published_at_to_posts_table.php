<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublishedAtToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('image');
            $table->string('movie')->nullable();
            $table->unsignedInteger('cost');
            $table->unsignedInteger('time');
            $table->string('adress')->nullable();
            $table->unsignedInteger('member');
            $table->text('comment');
            $table->dateTime('date');
            $table->unsignedInteger('type');
            $table->unsignedInteger('destination_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
}
