<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarketicaUltracapFaq5 extends Migration
{
    public function up()
    {
        Schema::table('marketica_ultracap_faq', function($table)
        {
            $table->dropColumn('path');
            $table->dropColumn('quest2');
            $table->dropColumn('quest3');
            $table->dropColumn('quest4');
            $table->dropColumn('quest5');
            $table->dropColumn('quest6');
            $table->dropColumn('quest7');
            $table->dropColumn('quest8');
            $table->dropColumn('quest9');
            $table->dropColumn('quest10');
            $table->dropColumn('quest11');
            $table->dropColumn('answer2');
            $table->dropColumn('answer3');
            $table->dropColumn('answer4');
            $table->dropColumn('answer5');
            $table->dropColumn('answer6');
            $table->dropColumn('answer7');
            $table->dropColumn('answer8');
            $table->dropColumn('answer9');
            $table->dropColumn('answer10');
            $table->dropColumn('answer11');
            $table->dropColumn('answer12');
            $table->dropColumn('quest12');
        });
    }
    
    public function down()
    {
        Schema::table('marketica_ultracap_faq', function($table)
        {
            $table->string('path', 191)->nullable();
            $table->text('quest2')->nullable();
            $table->text('quest3')->nullable();
            $table->text('quest4')->nullable();
            $table->text('quest5')->nullable();
            $table->text('quest6')->nullable();
            $table->text('quest7')->nullable();
            $table->text('quest8')->nullable();
            $table->text('quest9')->nullable();
            $table->text('quest10')->nullable();
            $table->text('quest11')->nullable();
            $table->text('answer2')->nullable();
            $table->text('answer3')->nullable();
            $table->text('answer4')->nullable();
            $table->text('answer5')->nullable();
            $table->text('answer6')->nullable();
            $table->text('answer7')->nullable();
            $table->text('answer8')->nullable();
            $table->text('answer9')->nullable();
            $table->text('answer10')->nullable();
            $table->text('answer11')->nullable();
            $table->text('answer12')->nullable();
            $table->text('quest12')->nullable();
        });
    }
}
