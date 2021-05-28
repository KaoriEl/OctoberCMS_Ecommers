<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapDocuments extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_documents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('path')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_documents');
    }
}
