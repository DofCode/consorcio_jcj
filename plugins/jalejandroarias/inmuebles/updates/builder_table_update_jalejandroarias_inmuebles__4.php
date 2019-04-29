<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmuebles4 extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_', function($table)
        {
            $table->integer('region_id');
            $table->integer('type_id');
            $table->integer('status_id');
            $table->dropColumn('region');
            $table->dropColumn('type');
            $table->dropColumn('status');
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_', function($table)
        {
            $table->dropColumn('region_id');
            $table->dropColumn('type_id');
            $table->dropColumn('status_id');
            $table->integer('region');
            $table->integer('type');
            $table->integer('status');
        });
    }
}
