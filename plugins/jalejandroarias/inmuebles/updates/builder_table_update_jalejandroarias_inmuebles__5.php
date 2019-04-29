<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmuebles5 extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_', function($table)
        {
            $table->integer('room')->nullable();
            $table->integer('meters')->nullable();
            $table->integer('bathroom')->default(null)->change();
            $table->integer('parking')->default(null)->change();
            $table->integer('year_of_construction')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_', function($table)
        {
            $table->dropColumn('room');
            $table->dropColumn('meters');
            $table->integer('bathroom')->default(1)->change();
            $table->integer('parking')->default(1)->change();
            $table->integer('year_of_construction')->default(1)->change();
        });
    }
}
