<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmueblesCountries extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_countries', function($table)
        {
            $table->renameColumn('id', 'country_id');
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_countries', function($table)
        {
            $table->renameColumn('country_id', 'id');
        });
    }
}
