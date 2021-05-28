<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapSupport extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_support', function($table)
        {
            $table->text('textblockone')->nullable()->change();
            $table->string('header', 191)->nullable()->change();
            $table->text('textblocktwo')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_support', function($table)
        {
            $table->text('textblockone')->nullable(false)->change();
            $table->string('header', 191)->nullable(false)->change();
            $table->text('textblocktwo')->nullable(false)->change();
        });
    }
}
