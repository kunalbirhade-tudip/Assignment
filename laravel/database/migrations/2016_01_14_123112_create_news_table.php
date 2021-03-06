<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
      Schema::create( 'news' , function(Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'url' )->unique();
            $table->string( 'headline' );
            $table->text( 'story' );
            $table->timestamps();
            $table->softDeletes();  //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop( 'news' );
        //
    }
}
