<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbrdrahimProductGame4 extends Migration
{
    public function up()
    {
        Schema::table('ibrdrahim_product_game', function($table)
        {
            $table->dateTime('publish_date');
        });
    }
    
    public function down()
    {
        Schema::table('ibrdrahim_product_game', function($table)
        {
            $table->dropColumn('publish_date');
        });
    }
}
