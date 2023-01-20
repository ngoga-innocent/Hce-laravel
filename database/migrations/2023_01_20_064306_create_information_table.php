<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('surname')->default('umuhoza');
            $table->string('dob')->default('2000');
            $table->string('fatherName')->default('peter');
            $table->string('motherName')->default('example');
            $table->string('email')->default('umuhoza@gmail.com')->unique();
            $table->string('password')->nullable();
            $table->string('position')->default('example');
            $table->string('tel')->default('example');
            $table->string('telOfSpouse')->nullable();
            $table->string('nameOfTheBankUsed')->default('example');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('cell')->default('example');
            $table->string('sector')->default('example');
            $table->string('district')->default('example');
            $table->string('province')->default('example');
            $table->string('country')->default('example');
            $table->string('residenceVillage')->default('example');
            $table->string('residenceCell')->default('example');
            $table->string('residenceSector')->default('example');
            $table->string('residenceDistrict')->default('example');
            $table->string('residenceProvince')->default('example');
            $table->string('martialStatus')->default('example');
            $table->string('dependants')->nullable();
            $table->string('university')->nullable();
            $table->string('field')->nullable();
            $table->string('secondary')->default('example');
            $table->string('option')->default('example');
            $table->string('primary')->default('example');
            $table->string('training')->default('example');
            $table->string('languages')->default('example');
            $table->string('computerskills')->default('example');
            $table->string('drivingskills')->nullable();
            $table->string('heritierFirstName')->default('example');
            $table->string('heritierLastName')->default('example');
            $table->string('heritierAddress')->default('example');
            $table->string('heritierRelation')->default('example');
            $table->string('employerName')->nullable();
            $table->string('employerAddress')->nullable();
            $table->string('employerTel')->nullable();
            $table->string('employerPosition')->nullable();
            $table->string('reason')->nullable();
            $table->string('prohibitedDrugs')->default('example');
            $table->string('disabilities')->default('example');
            $table->string('contactFirstName')->default('example');
            $table->string('contactLastName')->default('example');
            $table->string('contactAddress')->default('example');
            $table->string('contactRelation')->default('example');
            $table->string('contactTel')->default('example');
            $table->string('contactEmail')->default('example');
            $table->string('staffName')->nullable();
            $table->string('staffRelationship')->nullable();
            $table->string('otherStaffName')->nullable();
            $table->string('otherStaffRelationship')->nullable();
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
        Schema::dropIfExists('information');
    }
};
