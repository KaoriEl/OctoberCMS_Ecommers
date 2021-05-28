<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapAboutlsuc extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_aboutlsuc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('allert_text')->nullable();
            $table->text('textblock')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_aboutlsuc');
    }
}
