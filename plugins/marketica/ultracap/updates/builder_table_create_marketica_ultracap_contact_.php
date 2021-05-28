<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracapContact extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('adress')->nullable();
            $table->string('phone_first')->nullable();
            $table->string('phone_second')->nullable();
            $table->string('phone_third')->nullable();
            $table->string('phone_fourth')->nullable();
            $table->string('phone_fifth')->nullable();
            $table->string('email')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_contact_');
    }
}
