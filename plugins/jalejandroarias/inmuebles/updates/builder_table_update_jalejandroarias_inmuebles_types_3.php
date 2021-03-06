<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJalejandroariasInmueblesTypes3 extends Migration
{
    public function up()
    {
        Schema::table('jalejandroarias_inmuebles_types', function($table)
        {
            $table->renameColumn('id', 'type_id');
        });
    }
    
    public function down()
    {
        Schema::table('jalejandroarias_inmuebles_types', function($table)
        {
            $table->renameColumn('type_id', 'id');
        });
    }
}
