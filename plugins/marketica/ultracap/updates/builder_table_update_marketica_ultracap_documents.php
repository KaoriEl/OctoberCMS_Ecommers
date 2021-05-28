<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapDocuments extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_documents', function($table)
        {
            $table->text('category')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_documents', function($table)
        {
            $table->dropColumn('category');
        });
    }
}
