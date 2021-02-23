<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url_logo');
            $table->longText('short_desc');
            $table->longText('long_desc');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->integer('sold_unit');
            $table->integer('avail_stock');
            $table->integer('breeders');
            $table->integer('farm_area');
            $table->string('img_header');
            $table->string('link_highlight_youtube');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('facebook');
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
        Schema::dropIfExists('information');
    }
}
