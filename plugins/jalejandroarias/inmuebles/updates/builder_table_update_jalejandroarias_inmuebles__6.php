<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmuebles6 extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_', function($table)
        {
            $table->boolean('important')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_', function($table)
        {
            $table->dropColumn('important');
        });
    }
}
