<?php namespace Marketica\Ultracap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarketicaUltracap extends Migration
{
    public function up()
    {
        Schema::create('marketica_ultracap_', function($table)
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
            $table->string('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('marketica_ultracap_');
    }
}
