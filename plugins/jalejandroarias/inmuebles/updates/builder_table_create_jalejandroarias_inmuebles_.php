<?php namespace JAlejandroArias\Inmuebles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJalejandroariasInmuebles extends Migration
{
    public function up()
    {
        Schema::create('jalejandroarias_inmuebles_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name', 60);
            $table->decimal('price', 10, 0)->nullable()->default(0.00);
            $table->string('construction', 35)->nullable();
            $table->integer('bathroom')->nullable()->default(1);
            $table->integer('parking')->nullable()->default(1);
            $table->integer('year_of_construction')->nullable()->default(1);
            $table->text('description');
            $table->string('direction', 60)->nullable();
            $table->string('neighborhood', 35)->nullable();
            $table->string('city', 35)->nullable();
            $table->integer('country_id');
            $table->integer('region_id');
            $table->integer('type_id');
            $table->integer('status_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jalejandroarias_inmuebles_');
    }
}
