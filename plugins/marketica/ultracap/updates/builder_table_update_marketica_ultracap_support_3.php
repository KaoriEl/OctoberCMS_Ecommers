<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapSupport3 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_support', function($table)
        {
            $table->text('textblock3')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_support', function($table)
        {
            $table->dropColumn('textblock3');
        });
    }
}
