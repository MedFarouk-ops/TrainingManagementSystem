<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
                $table->bigIncrements('id');
     
                $table->unsignedBigInteger('formateur_id')->index('formateur_id')->foreign()->references("id")->on("formateurs")->onDelete("cascade");
     
                $table->string('description');

                $table->string('date_debut'); 
                
                $table->string('date_fin');

                $table->string('duree');           

                $table->string('categorie');     

                $table->string('certified');     

                $table->string('link');

                $table->string('title');

                $table->string('image');

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
        Schema::dropIfExists('formations');
    }
}
