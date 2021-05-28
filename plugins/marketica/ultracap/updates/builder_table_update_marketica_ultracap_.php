<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracap extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->dropColumn('adress');
            $table->dropColumn('phone_first');
            $table->dropColumn('phone_second');
            $table->dropColumn('phone_third');
            $table->dropColumn('phone_fourth');
            $table->dropColumn('phone_fifth');
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_', function($table)
        {
            $table->string('adress', 191)->nullable();
            $table->string('phone_first', 191)->nullable();
            $table->string('phone_second', 191)->nullable();
            $table->string('phone_third', 191)->nullable();
            $table->string('phone_fourth', 191)->nullable();
            $table->string('phone_fifth', 191)->nullable();
        });
    }
}
