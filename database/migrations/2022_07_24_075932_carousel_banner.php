<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarouselBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel_banner', function (Blueprint $table) {
            $table->id();
            $table->string('banner_name');
            $table->string('banner_link');
            $table->string('banner_link_blurb');
            $table->string('banner_blurb');
            $table->rememberToken();
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
        Schema::dropIfExists('carousel_banner');
    }
}
