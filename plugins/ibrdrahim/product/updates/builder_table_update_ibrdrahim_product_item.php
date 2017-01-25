<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbrdrahimProductItem extends Migration
{
    public function up()
    {
        Schema::table('ibrdrahim_product_item', function($table)
        {
            $table->string('slug');
            $table->bigIncrements('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ibrdrahim_product_item', function($table)
        {
            $table->dropColumn('slug');
            $table->bigIncrements('id')->unsigned()->change();
        });
    }
}
