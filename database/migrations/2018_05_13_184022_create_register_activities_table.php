<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_activities', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('codActivity');
            $table->integer('company_id')->unsigned();
            $table->integer('consultant_id')->unsigned();
            $table->integer('activity_id')->unsigned();
            $table->integer('businessuser_id')->unsigned();
            $table->string('desRegisterActivity');
            $table->date('dateRegisterActivity');
            $table->date('dateRegisterActivities');

            // foreign key
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('consultant_id')->references('id')->on('consultants');
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('businessuser_id')->references('id')->on('business_users');
            
            // auditoria
            $table->timestamps();
            $table->softDeletes();

            // index
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_activities');
    }
}
