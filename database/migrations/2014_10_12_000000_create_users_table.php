<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->string('name');
            
            $table->string('email')->unique();
            
            $table->timestamp('email_verified_at')->nullable();
            
            $table->string('image')->index('formateur_id')->nullable()->default('noImage');  
            
            $table->string('telephone');
            
            $table->string('status');
            
            $table->string('institution');
            
            $table->string('notes')->nullable()->default('');
            
            $table->string('password');
            
            $table->boolean('etat')->default(false);
            
            $table->rememberToken();
            
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
        Schema::dropIfExists('users');
    }
}
