<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbrdrahimProductItem2 extends Migration
{
    public function up()
    {
        Schema::table('ibrdrahim_product_item', function($table)
        {
            $table->integer('progress')->default(100);
        });
    }
    
    public function down()
    {
        Schema::table('ibrdrahim_product_item', function($table)
        {
            $table->dropColumn('progress');
        });
    }
}
