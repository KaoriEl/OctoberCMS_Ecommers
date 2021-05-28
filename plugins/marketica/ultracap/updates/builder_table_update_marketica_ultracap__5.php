<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracap5 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->string('switch', 191)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->integer('switch')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
