<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapFaq extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_faq', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text(' question');
            $table->text(' answer')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_faq');
    }
}
