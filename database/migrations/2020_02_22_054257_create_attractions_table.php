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
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->binary('attraction_image')->nullable();
            $table->binary('other_place_1_image')->nullable();
            $table->binary('other_place_2_image')->nullable();
            $table->binary('other_place_3_image')->nullable();
            $table->timestamps();
        });
        DB::table('attractions')->insert(array(
            'attraction' => 'Great Sphinx of Giza',
            'country_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Abu Simbel Temples',
            'country_id' => 1,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Hwange National Park',
            'country_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Victoria Falls National Park',
            'country_id' => 2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('attractions')->insert(array(
            'attraction' => 'Taj Mahal',
            'country_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Amber Palace',
            'country_id' => 3,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Mount Fuji',
            'country_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Tokyo Skytree',
            'country_id' => 4,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Eiffel Tower',
            'country_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Louvre Museum',
            'country_id' => 5,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Leaning Tower of Pisa',
            'country_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Roman Forum',
            'country_id' => 6,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('attractions')->insert(array(
            'attraction' => 'CN Tower',
            'country_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Niagara Falls',
            'country_id' => 7,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Grand Canyon National Park',
            'country_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Statue of Liberty National Monument',
            'country_id' => 8,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Christ the Redeemer',
            'country_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Tijuca National Park',
            'country_id' => 9,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Casapueblo',
            'country_id' => 10,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'La Mano de Punta del Este',
            'country_id' => 10,
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



