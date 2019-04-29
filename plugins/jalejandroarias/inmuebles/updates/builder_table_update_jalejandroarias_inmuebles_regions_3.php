<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmueblesRegions3 extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_regions', function($table)
        {
            $table->renameColumn('id', 'region_id');
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_regions', function($table)
        {
            $table->renameColumn('region_id', 'id');
        });
    }
}
