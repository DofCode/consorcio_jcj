<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJalejandroariasInmueblesStatus extends Migration
{
    public function up()
    {
        Schema::create('jalejandroarias_inmuebles_status', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 35);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jalejandroarias_inmuebles_status');
    }
}
