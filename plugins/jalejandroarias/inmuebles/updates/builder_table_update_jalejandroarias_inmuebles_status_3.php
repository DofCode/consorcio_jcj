<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmueblesStatus3 extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_status', function($table)
        {
            $table->renameColumn('id', 'status_id');
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_status', function($table)
        {
            $table->renameColumn('status_id', 'id');
        });
    }
}
