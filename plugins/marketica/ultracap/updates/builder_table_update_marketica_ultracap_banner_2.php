<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapBanner2 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_banner', function($table)
        {
            $table->string('url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_banner', function($table)
        {
            $table->dropColumn('url');
        });
    }
}
