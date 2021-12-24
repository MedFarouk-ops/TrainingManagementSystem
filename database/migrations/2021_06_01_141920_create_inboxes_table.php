<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inboxes', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('user_id')->index('user_id')->nullable()->default('00');;
    
            $table->unsignedBigInteger('formateur_id')->index('formateur_id')->nullable()->default('00');
    
            $table->unsignedBigInteger('admin_id')->index('admin_id')->nullable()->default('00');;
    
            $table->string('subject');

            $table->string('message');

            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inboxes');
    }
}
