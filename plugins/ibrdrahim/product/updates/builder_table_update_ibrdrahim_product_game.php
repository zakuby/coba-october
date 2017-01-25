<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbrdrahimProductGame extends Migration
{
    public function up()
    {
        Schema::rename('ibrdrahim_product_item', 'ibrdrahim_product_game');
        Schema::table('ibrdrahim_product_game', function($table)
        {
            $table->text('devlog_content')->nullable();
            $table->integer('devlog_progress')->nullable();
            $table->text('devlog_external_link')->nullable();
            $table->boolean('is_published')->default(0);
            $table->boolean('external_link_enabled')->default(0);
            $table->dropColumn('progress');
        });
    }
    
    public function down()
    {
        Schema::rename('ibrdrahim_product_game', 'ibrdrahim_product_item');
        Schema::table('ibrdrahim_product_item', function($table)
        {
            $table->dropColumn('devlog_content');
            $table->dropColumn('devlog_progress');
            $table->dropColumn('devlog_external_link');
            $table->dropColumn('is_published');
            $table->dropColumn('external_link_enabled');
            $table->integer('progress')->default(100);
        });
    }
}
