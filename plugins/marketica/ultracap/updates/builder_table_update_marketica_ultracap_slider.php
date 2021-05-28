<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapSlider extends Migration
{
    public function up()
    {
        Schema::rename('marketica_ultracap_banners', 'marketica_ultracap_slider');
    }
    
    public function down()
    {
        Schema::rename('marketica_ultracap_slider', 'marketica_ultracap_banners');
    }
}
