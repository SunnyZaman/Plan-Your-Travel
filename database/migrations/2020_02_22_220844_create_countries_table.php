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
            $table->engine = 'InnoDB'; // <- For string foreign keys
            $table->string('country')->primary();
            $table->string('continent_id');
            $table->foreign('continent_id')->references('continent')->on('continents');
            $table->timestamps();
        });
        DB::table('countries')->insert(array(
            'country' => 'Egypt',
            'continent_id' => 'Africa',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Zimbabwe',
            'continent_id' => 'Africa',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('countries')->insert(array(
            'country' => 'India',
            'continent_id' => 'Asia',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Japan',
            'continent_id' => 'Asia',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'France',
            'continent_id' => 'Europe',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Italy',
            'continent_id' => 'Europe',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Canada',
            'continent_id' => 'North America',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'United States of America',
            'continent_id' => 'North America',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Brazil',
            'continent_id' => 'South America',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('countries')->insert(array(
            'country' => 'Uruguay',
            'continent_id' => 'South America',
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





