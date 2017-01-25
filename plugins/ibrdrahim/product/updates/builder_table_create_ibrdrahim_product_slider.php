<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIbrdrahimProductSlider extends Migration
{
    public function up()
    {
        Schema::create('ibrdrahim_product_slider', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('tag_line')->nullable();
            $table->string('external_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ibrdrahim_product_slider');
    }
}
