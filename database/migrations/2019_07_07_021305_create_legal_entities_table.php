<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('abn');
            $table->boolean('abn_active')->default(0);
            $table->string('business_account_name');
            $table->string('trading_name')->nullable();
            $table->string('electrical_licence_number')->nullable();
            $table->string('nature_of_business')->nullable();
            $table->integer('employees');
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
        Schema::dropIfExists('legal_entities');
    }
}
