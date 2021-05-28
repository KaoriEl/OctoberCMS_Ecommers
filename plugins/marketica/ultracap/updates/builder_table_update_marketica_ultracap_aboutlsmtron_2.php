<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapAboutlsmtron2 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_aboutlsmtron', function($table)
        {
            $table->string('path2')->nullable();
            $table->string('path3')->nullable();
            $table->string('pathbanner')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_aboutlsmtron', function($table)
        {
            $table->dropColumn('path2');
            $table->dropColumn('path3');
            $table->dropColumn('pathbanner');
        });
    }
}
