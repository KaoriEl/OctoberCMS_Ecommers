<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapBanners extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_banners', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('name')->nullable();
            $table->string('path')->nullable();
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_banners');
    }
}
