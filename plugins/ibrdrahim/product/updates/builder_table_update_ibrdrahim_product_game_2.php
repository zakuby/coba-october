<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbrdrahimProductGame2 extends Migration
{
    public function up()
    {
        Schema::table('ibrdrahim_product_game', function($table)
        {
            $table->text('wiki_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ibrdrahim_product_game', function($table)
        {
            $table->dropColumn('wiki_link');
        });
    }
}
