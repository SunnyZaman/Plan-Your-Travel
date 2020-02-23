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
            $table->string('attraction_image');
            $table->string('close_place_1_image');
            $table->string('close_place_2_image');
            $table->string('close_place_3_image');
            $table->timestamps();
        });
        DB::table('attractions')->insert(array(
            'attraction' => 'Great Sphinx of Giza',
            'country_id' => 'Egypt',
            'attraction_image' => 'sphinx1.jpg',
            'close_place_1_image' => 'abuSimbelTemples1.jpg',
            'close_place_2_image' => 'pyramidQueens.jpg',
            'close_place_3_image' => 'templeMenkaure.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Abu Simbel Temples',
            'country_id' => 'Egypt',
            'attraction_image' => 'abuSimbelTemples1.jpg',
            'close_place_1_image' => 'sphinx1.jpg',
            'close_place_2_image' => 'pyramidQueens.jpg',
            'close_place_3_image' => 'templeMenkaure.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Hwange National Park',
            'country_id' => 'Zimbabwe',
            'attraction_image' => 'hwangeNationalPark1.jpg',
            'close_place_1_image' => 'victoriaFalls1.jpg',
            'close_place_2_image' => 'davidLivingstoneStatue.jpg',
            'close_place_3_image' => 'matoboNationalPark.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Victoria Falls National Park',
            'country_id' => 'Zimbabwe',
            'attraction_image' => 'victoriaFalls1.jpg',
            'close_place_1_image' => 'hwangeNationalPark1.jpg',
            'close_place_2_image' => 'davidLivingstoneStatue.jpg',
            'close_place_3_image' => 'matoboNationalPark.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('attractions')->insert(array(
            'attraction' => 'Taj Mahal',
            'country_id' => 'India',
            'attraction_image' => 'tajMahal1.jpg',
            'close_place_1_image' => 'amberPalace1.jpg',
            'close_place_2_image' => 'tajGarden.jpg',
            'close_place_3_image' => 'kauBanMosque.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Amber Palace',
            'country_id' => 'India',
            'attraction_image' => 'amberPalace1.jpg',
            'close_place_1_image' => 'tajMahal1.jpg',
            'close_place_2_image' => 'tajGarden.jpg',
            'close_place_3_image' => 'kauBanMosque.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Mount Fuji',
            'country_id' => 'Japan',
            'attraction_image' => 'mountFuji1.jpg',
            'close_place_1_image' => 'tokyoSkytree1.jpg',
            'close_place_2_image' => 'tokyoTower.jpg',
            'close_place_3_image' => 'osakaCastle.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Tokyo Skytree',
            'country_id' => 'Japan',
            'attraction_image' => 'tokyoSkytree1.jpg',
            'close_place_1_image' => 'mountFuji1.jpg',
            'close_place_2_image' => 'tokyoTower.jpg',
            'close_place_3_image' => 'osakaCastle.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Eiffel Tower',
            'country_id' => 'France',
            'attraction_image' => 'eiffel1.jpg',
            'close_place_1_image' => 'louvre1.jpg',
            'close_place_2_image' => 'montmarte.jpg',
            'close_place_3_image' => 'versailles.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Louvre Museum',
            'country_id' => 'France',
            'attraction_image' => 'louvre1.jpg',
            'close_place_1_image' => 'eiffel1.jpg',
            'close_place_2_image' => 'montmarte.jpg',
            'close_place_3_image' => 'versailles.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Leaning Tower of Pisa',
            'country_id' => 'Italy',
            'attraction_image' => 'pisa1.jpg',
            'close_place_1_image' => 'romanforum1.jpg',
            'close_place_2_image' => 'colosseum.jpg',
            'close_place_3_image' => 'pantheon.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Roman Forum',
            'country_id' => 'Italy',
            'attraction_image' => 'romanforum1.jpg',
            'close_place_1_image' => 'pisa1.jpg',
            'close_place_2_image' => 'colosseum.jpg',
            'close_place_3_image' => 'pantheon.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('attractions')->insert(array(
            'attraction' => 'CN Tower',
            'country_id' => 'Canada',
            'attraction_image' => 'cntower1.jpg',
            'close_place_1_image' => 'niagara1.jpg',
            'close_place_2_image' => 'moraineLake.jpg',
            'close_place_3_image' => 'butchartGardens.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Niagara Falls',
            'country_id' => 'Canada',
            'attraction_image' => 'niagara2.jpg',
            'close_place_1_image' => 'cntower1.jpg',
            'close_place_2_image' => 'moraineLake.jpg',
            'close_place_3_image' => 'butchartGardens.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Grand Canyon National Park',
            'country_id' => 'United States of America',
            'attraction_image' => 'grandcanyon1.jpg',
            'close_place_1_image' => 'sol1.jpg',
            'close_place_2_image' => 'hollywood.jpg',
            'close_place_3_image' => 'goldengatebridge.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Statue of Liberty National Monument',
            'country_id' => 'United States of America',
            'attraction_image' => 'sol1.jpg',
            'close_place_1_image' => 'grandcanyon1.jpg',
            'close_place_2_image' => 'hollywood.jpg',
            'close_place_3_image' => 'goldengatebridge.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Christ the Redeemer',
            'country_id' => 'Brazil',
            'attraction_image' => 'christtheredeemer1.jpg',
            'close_place_1_image' => 'tijuca1.jpg',
            'close_place_2_image' => 'copacabanabeach.jpg',
            'close_place_3_image' => 'sugarloafmt.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Tijuca National Park',
            'country_id' => 'Brazil',
            'attraction_image' => 'tijuca1.jpg',
            'close_place_1_image' => 'christtheredeemer1.jpg',
            'close_place_2_image' => 'copacabanabeach.jpg',
            'close_place_3_image' => 'sugarloafmt.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Casapueblo',
            'country_id' => 'Uruguay',
            'attraction_image' => 'casapueblo1.jpg',
            'close_place_1_image' => 'puntadeleste1.jpg',
            'close_place_2_image' => 'palacioSalvo.jpg',
            'close_place_3_image' => 'santaTeresaPark.jpg',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'La Mano de Punta del Este',
            'country_id' => 'Uruguay',
            'attraction_image' => 'puntadeleste1.jpg',
            'close_place_1_image' => 'casapueblo1.jpg',
            'close_place_2_image' => 'palacioSalvo.jpg',
            'close_place_3_image' => 'santaTeresaPark.jpg',
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





