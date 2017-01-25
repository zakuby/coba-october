<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbrdrahimProductSlider extends Migration
{
    public function up()
    {
        Schema::table('ibrdrahim_product_slider', function($table)
        {
            $table->integer('sequence')->default(0);
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ibrdrahim_product_slider', function($table)
        {
            $table->dropColumn('sequence');
            $table->increments('id')->unsigned()->change();
        });
    }
}
