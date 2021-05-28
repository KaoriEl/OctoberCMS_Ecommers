<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapSupport extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_support', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('textblockone');
            $table->string('header');
            $table->text('textblocktwo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_support');
    }
}
