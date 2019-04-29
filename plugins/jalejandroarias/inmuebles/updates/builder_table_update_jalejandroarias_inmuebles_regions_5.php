<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmueblesRegions5 extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_regions', function($table)
        {
            $table->integer('country_id');
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_regions', function($table)
        {
            $table->dropColumn('country_id');
        });
    }
}
