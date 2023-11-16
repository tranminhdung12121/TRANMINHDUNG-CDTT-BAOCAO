<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('tmd_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('topic_id');
            $table->string('title',1000);
            $table->string('slug',1000);
            $table->mediumText('detail');
            $table->string('image',1000);
            $table->string('type',100);
            $table->string('metakey');
            $table->string('metadesc');
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);
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
        Schema::dropIfExists('tmd_post');
    }
};
