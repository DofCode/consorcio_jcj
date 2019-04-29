<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmuebles extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
