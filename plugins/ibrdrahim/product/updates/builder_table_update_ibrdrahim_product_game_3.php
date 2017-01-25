<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbrdrahimProductGame3 extends Migration
{
    public function up()
    {
        Schema::table('ibrdrahim_product_game', function($table)
        {
            $table->dropColumn('devlog_content');
            $table->dropColumn('devlog_progress');
            $table->dropColumn('devlog_external_link');
        });
    }
    
    public function down()
    {
        Schema::table('ibrdrahim_product_game', function($table)
        {
            $table->text('devlog_content')->nullable();
            $table->integer('devlog_progress')->nullable();
            $table->text('devlog_external_link')->nullable();
        });
    }
}
