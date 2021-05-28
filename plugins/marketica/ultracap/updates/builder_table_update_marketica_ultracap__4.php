<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracap4 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->integer('switch')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->dropColumn('switch');
        });
    }
}
