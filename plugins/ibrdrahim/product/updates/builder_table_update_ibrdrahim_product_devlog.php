<?php namespace Ibrdrahim\product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbrdrahimProductDevlog extends Migration
{
    public function up()
    {
        Schema::table('ibrdrahim_product_devlog', function($table)
        {
            $table->bigIncrements('id')->unsigned(false)->change();
            $table->renameColumn('gameid', 'game_id');
        });
    }
    
    public function down()
    {
        Schema::table('ibrdrahim_product_devlog', function($table)
        {
            $table->bigIncrements('id')->unsigned()->change();
            $table->renameColumn('game_id', 'gameid');
        });
    }
}
