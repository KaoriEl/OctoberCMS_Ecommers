<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapFaq2 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_faq', function($table)
        {
            $table->string('path')->nullable();
            $table->text('answer')->nullable()->change();
            $table->text('quest')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_faq', function($table)
        {
            $table->dropColumn('path');
            $table->text('answer')->nullable(false)->change();
            $table->text('quest')->nullable(false)->change();
        });
    }
}
