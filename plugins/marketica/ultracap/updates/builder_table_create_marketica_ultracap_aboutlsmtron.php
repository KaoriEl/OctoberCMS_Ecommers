<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapAboutlsmtron extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_aboutlsmtron', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('header')->nullable();
            $table->text('subtitle1')->nullable();
            $table->text('subtitle2')->nullable();
            $table->text('subtitle3')->nullable();
            $table->text('subtitle4')->nullable();
            $table->text('text1')->nullable();
            $table->text('text2')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_aboutlsmtron');
    }
}
