<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapBanner extends Migration
{
    public function up()
    {
        Schema::rename('marketica_ultracap_slider', 'marketica_ultracap_banner');
    }
    
    public function down()
    {
        Schema::rename('marketica_ultracap_banner', 'marketica_ultracap_slider');
    }
}
