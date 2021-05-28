<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracap2 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->string('path')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->dropColumn('path');
        });
    }
}
