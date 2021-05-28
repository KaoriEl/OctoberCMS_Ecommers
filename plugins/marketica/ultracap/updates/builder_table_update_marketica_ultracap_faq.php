<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapFaq extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_faq', function($table)
        {
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_faq', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
