<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapFaq2 extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_faq', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('answer');
            $table->text('quest');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_faq');
    }
}
