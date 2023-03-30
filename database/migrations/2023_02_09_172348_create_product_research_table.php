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
            $table->text('url')->nullable(); 
            $table->integer('eng_heart')->nullable(); 
            $table->integer('eng_comment')->nullable(); 
            $table->integer('eng_share')->nullable(); 
            $table->integer('eng_reaction')->nullable(); 
            $table->string('cpa')->nullable(); 
            $table->string('net')->nullable(); 
            $table->string('total_order')->nullable(); 
            $table->string('total_review')->nullable(); 
            $table->string('avg_rating')->nullable(); 
            $table->string('country')->nullable(); 
            $table->string('gender')->nullable(); 
            $table->string('age')->nullable(); 
            $table->string('audience')->nullable(); 
            $table->string('interests')->nullable(); 
            $table->string('short_description');
            $table->longText('description')->nullable();
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
