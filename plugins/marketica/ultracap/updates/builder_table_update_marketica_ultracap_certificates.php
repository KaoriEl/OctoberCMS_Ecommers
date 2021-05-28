<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapCertificates extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_certificates', function($table)
        {
            $table->string('path')->nullable();
            $table->string('name', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_certificates', function($table)
        {
            $table->dropColumn('path');
            $table->string('name', 191)->nullable(false)->change();
        });
    }
}
