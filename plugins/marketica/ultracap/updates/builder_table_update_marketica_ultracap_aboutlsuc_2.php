<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapAboutlsuc2 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_aboutlsuc', function($table)
        {
            $table->text('allert_text')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_aboutlsuc', function($table)
        {
            $table->string('allert_text', 191)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
