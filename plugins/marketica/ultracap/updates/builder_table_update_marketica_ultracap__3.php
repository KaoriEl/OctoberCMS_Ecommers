<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracap3 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->string('url')->nullable();
            $table->string('file')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->dropColumn('url');
            $table->dropColumn('file');
        });
    }
}
