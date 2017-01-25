<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIbrdrahimProductItem extends Migration
{
    public function up()
    {
        Schema::create('ibrdrahim_product_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('external_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ibrdrahim_product_item');
    }
}
