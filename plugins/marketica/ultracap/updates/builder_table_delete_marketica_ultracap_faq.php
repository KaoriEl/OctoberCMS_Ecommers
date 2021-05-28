<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMarketicaUltracapFaq extends Migration
{
    public function up()
    {
        Schema::dropIfExists('marketica_ultracap_faq');
    }
    
    public function down()
    {
        Schema::create('marketica_ultracap_faq', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text(' question');
            $table->text(' answer')->nullable();
        });
    }
}
