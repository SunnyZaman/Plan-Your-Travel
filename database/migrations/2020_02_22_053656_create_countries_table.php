<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country');
            $table->bigInteger('continent_id')->unsigned();
            $table->foreign('continent_id')->references('id')->on('continents');
            $table->timestamps();
        });
        DB::table('countries')->insert(array(
            'country' => 'Egypt',
            'continent_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Zimbabwe',
            'continent_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('countries')->insert(array(
            'country' => 'India',
            'continent_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Japan',
            'continent_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'France',
            'continent_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Italy',
            'continent_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Canada',
            'continent_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'United States of America',
            'continent_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Brazil',
            'continent_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Uruguay',
            'continent_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}


