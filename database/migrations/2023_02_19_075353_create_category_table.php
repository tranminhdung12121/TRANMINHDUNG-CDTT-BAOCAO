<?php

use Faker\Guesser\Name;
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
        Schema::create('tmd_category', function (Blueprint $table) {
            $table->id();
            $table->string('Name',1000);
            $table->string('slug',1000)->nullable();
            $table->unsignedInteger('parent_id')->default(0);
            $table->unsignedInteger('sort_order')->default(1);
            $table->unsignedTinyInteger('level')->default(1);
            $table->string('metakey');
            $table->string('metadesc');
            $table->unsignedInteger('created_by');
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
        Schema::dropIfExists('tmd_category');
    }
};
