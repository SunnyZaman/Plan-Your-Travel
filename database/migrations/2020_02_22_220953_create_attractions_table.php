<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('attraction');
            $table->string('country_id');
            $table->foreign('country_id')->references('country')->on('countries');
            $table->binary('attraction_image')->nullable();
            $table->binary('other_place_1_image')->nullable();
            $table->binary('other_place_2_image')->nullable();
            $table->binary('other_place_3_image')->nullable();
            $table->timestamps();
        });
        DB::table('attractions')->insert(array(
            'attraction' => 'Great Sphinx of Giza',
            'country_id' => 'Egypt',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Abu Simbel Temples',
            'country_id' => 'Egypt',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Hwange National Park',
            'country_id' => 'Zimbabwe',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Victoria Falls National Park',
            'country_id' => 'Zimbabwe',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('attractions')->insert(array(
            'attraction' => 'Taj Mahal',
            'country_id' => 'India',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Amber Palace',
            'country_id' => 'India',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Mount Fuji',
            'country_id' => 'Japan',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Tokyo Skytree',
            'country_id' => 'Japan',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Eiffel Tower',
            'country_id' => 'France',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Louvre Museum',
            'country_id' => 'France',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Leaning Tower of Pisa',
            'country_id' => 'Italy',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Roman Forum',
            'country_id' => 'Italy',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('attractions')->insert(array(
            'attraction' => 'CN Tower',
            'country_id' => 'Canada',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Niagara Falls',
            'country_id' => 'Canada',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Grand Canyon National Park',
            'country_id' => 'United States of America',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Statue of Liberty National Monument',
            'country_id' => 'United States of America',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Christ the Redeemer',
            'country_id' => 'Brazil',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Tijuca National Park',
            'country_id' => 'Brazil',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Casapueblo',
            'country_id' => 'Uruguay',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'La Mano de Punta del Este',
            'country_id' => 'Uruguay',
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
        Schema::dropIfExists('attractions');
    }
}




