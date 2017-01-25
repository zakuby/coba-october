<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIbrdrahimProductDevlog extends Migration
{
    public function up()
    {
        Schema::create('ibrdrahim_product_devlog', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('gameid');
            $table->text('devlog_name');
            $table->dateTime('devlog_date');
            $table->text('devlog_short_description')->nullable();
            $table->text('devlog_content')->nullable();
            $table->integer('devlog_progress')->nullable();
            $table->text('devlog_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ibrdrahim_product_devlog');
    }
}
