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
        Schema::create('product_research', function (Blueprint $table) {
            $table->id(); 
            $table->string('title');
            $table->string('slug');
            $table->string('categories'); 
            $table->float('buy_price',8,2);
            $table->float('sell_price',8,2);
            $table->text('aliexpress_link')->nullable(); 
            $table->text('fb_ads')->nullable(); 
            $table->text('video_link')->nullable(); 
            $table->text('fb_ads_img')->nullable(); 
            $table->text('video_link_img')->nullable(); 
            $table->text('url'); 
            $table->integer('eng_heart'); 
            $table->integer('eng_comment'); 
            $table->integer('eng_share'); 
            $table->integer('eng_reaction'); 
            $table->string('cpa'); 
            $table->string('net'); 
            $table->string('total_order'); 
            $table->string('review'); 
            $table->string('country'); 
            $table->string('gender'); 
            $table->string('age'); 
            $table->string('audience'); 
            $table->string('interests'); 
            $table->string('short_description'); 
            $table->longText('description');
            $table->string('status',10); 
            $table->text('images');
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
        Schema::dropIfExists('product_research');
    }
};
