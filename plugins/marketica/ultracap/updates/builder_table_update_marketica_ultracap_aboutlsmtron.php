<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapAboutlsmtron extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_aboutlsmtron', function($table)
        {
            $table->string('path')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_aboutlsmtron', function($table)
        {
            $table->dropColumn('path');
        });
    }
}
