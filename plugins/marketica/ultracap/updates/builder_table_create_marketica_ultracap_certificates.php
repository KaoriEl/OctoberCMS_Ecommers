<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapCertificates extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_certificates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('name');
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_certificates');
    }
}
