<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapFaq4 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_faq', function($table)
        {
            $table->text('quest12')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_faq', function($table)
        {
            $table->dropColumn('quest12');
        });
    }
}
