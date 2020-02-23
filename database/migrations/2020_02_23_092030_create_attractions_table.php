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
            $table->text('attraction_data');
            $table->text('close_place_1_data');
            $table->text('close_place_2_data');
            $table->text('close_place_3_data');
            $table->timestamps();
        });
        DB::table('attractions')->insert(array(
            'attraction' => 'Great Sphinx of Giza',
            'country_id' => 'Egypt',
            'attraction_data' => '{"title":"Great Sphinx of Giza", "location": "Great Sphinx of Giza, Al Giza Desert, Giza Governorate, Egypt", "image":"sphinx1.jpg"}',
            'close_place_1_data' => '{"title":"Abu Simbel Temples", "location":"Abu Simbel Temples, Abu Simbel, Aswan Governorate, Egypt", "image":"abuSimbelTemples1.jpg"}"}',
            'close_place_2_data' => '{"title":"Pyramids of Queens", "location": "Pyramids of Queens, Al Giza Desert, Giza Governorate, Egypt", "image":"pyramidQueens.jpg"}"}',
            'close_place_3_data' => '{"title":"Valley Temple of Menkaure", "location": "Valley Temple of Menkaure, Al Giza Desert, Giza Governorate, Egypt", "image":"templeMenkaure.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Abu Simbel Temples',
            'country_id' => 'Egypt',
            'attraction_data' => '{"title":"Abu Simbel Temples", "location":"Abu Simbel Temples, Abu Simbel, Aswan Governorate, Egypt", "image":"abuSimbelTemples1.jpg"}"}',
            'close_place_1_data' => '{"title":"Great Sphinx of Giza", "location": "Great Sphinx of Giza, Al Giza Desert, Giza Governorate, Egypt", "image":"sphinx1.jpg"}',
            'close_place_2_data' => '{"title":"Pyramids of Queens", "location": "Pyramids of Queens, Al Giza Desert, Giza Governorate, Egypt", "image":"pyramidQueens.jpg"}"}',
            'close_place_3_data' => '{"title":"Valley Temple of Menkaure", "location": "Valley Temple of Menkaure, Al Giza Desert, Giza Governorate, Egypt", "image":"templeMenkaure.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Hwange National Park',
            'country_id' => 'Zimbabwe',
            'attraction_data' => '{"title":"Hwange National Park", "location": "Hwange National Park, Zimbabwe", "image":"hwangeNationalPark1.jpg"}',
            'close_place_1_data' => '{"title":"Victoria Falls", "location": "Victoria Falls, Zimbabwe", "image":"victoriaFalls1.jpg"}',
            'close_place_2_data' => '{"title":"David Livingstone Statue", "location": "David Livingstone Statue, Victoria Falls, Zimbabwe", "image":"davidLivingstoneStatue.jpg"}',
            'close_place_3_data' => '{"title":"Matobo National Park", "location": "Matobo National Park, Zimbabwe", "image":"matoboNationalPark.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Victoria Falls National Park',
            'country_id' => 'Zimbabwe',
            'attraction_data' => '{"title":"Victoria Falls", "location": "Victoria Falls, Zimbabwe", "image":"victoriaFalls1.jpg"}',
            'close_place_1_data' => '{"title":"Hwange National Park", "location": "Hwange National Park, Zimbabwe", "image":"hwangeNationalPark1.jpg"}',
            'close_place_2_data' => '{"title":"David Livingstone Statue", "location": "David Livingstone Statue, Victoria Falls, Zimbabwe", "image":"davidLivingstoneStatue.jpg"}',
            'close_place_3_data' => '{"title":"Matobo National Park", "location": "Matobo National Park, Zimbabwe", "image":"matoboNationalPark.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('attractions')->insert(array(
            'attraction' => 'Taj Mahal',
            'country_id' => 'India',
            'attraction_data' => '{"title":"Taj Mahal", "location": "Taj Mahal, Dharmapuri, Forest Colony, Tajganj, Agra, Uttar Pradesh 282001, India", "image":"tajMahal1.jpg"}',
            'close_place_1_data' => '{"title":"Amber Palace", "location": "Amber Palace, Devisinghpura, Amer, Jaipur, Rajasthan 302001, India", "image":"amberPalace1.jpg"}',
            'close_place_2_data' => '{"title":"Taj Garden", "location": "Taj Garden, M.G. Road, Purani Mandi, Rakabganj, Agra, Uttar Pradesh 282001, India", "image":"tajGarden.jpg"}',
            'close_place_3_data' => '{"title":"Kau Ban Mosque", "location": "Kau Ban Mosque, Dharmapuri, Forest Colony, Tajganj, Agra, Uttar Pradesh 282001, India", "image":"kauBanMosque.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Amber Palace',
            'country_id' => 'India',
            'attraction_data' => '{"title":"Amber Palace", "location": "Amber Palace, Devisinghpura, Amer, Jaipur, Rajasthan 302001, India", "image":"amberPalace1.jpg"}',
            'close_place_1_data' => '{"title":"Taj Mahal", "location": "Taj Mahal, Dharmapuri, Forest Colony, Tajganj, Agra, Uttar Pradesh 282001, India", "image":"tajMahal1.jpg"}',
            'close_place_2_data' => '{"title":"Taj Garden", "location": "Taj Garden, M.G. Road, Purani Mandi, Rakabganj, Agra, Uttar Pradesh 282001, India", "image":"tajGarden.jpg"}',
            'close_place_3_data' => '{"title":"Kau Ban Mosque", "location": "Kau Ban Mosque, Dharmapuri, Forest Colony, Tajganj, Agra, Uttar Pradesh 282001, India", "image":"kauBanMosque.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Mount Fuji',
            'country_id' => 'Japan',
            'attraction_data' => '{"title":"Mount Fuji", "location": "Mount Fuji, Kitayama, Fujinomiya, Shizuoka 418-0112, Japan", "image":"mountFuji1.jpg"}',
            'close_place_1_data' => '{"title":"Tokyo Skytree", "location": "Tokyo Skytree, 1 Chome-1-2 Oshiage, Sumida City, Tokyo 131-0045, Japan", "image":"tokyoSkytree1.jpg"}',
            'close_place_2_data' => '{"title":"Tokyo Tower", "location": "Tokyo Tower, 4 Chome-2-8 Shibakoen, Minato City, Tokyo 105-0011, Japan", "image":"tokyoTower.jpg"}',
            'close_place_3_data' => '{"title":"Osaka Castle", "location": "Osaka Castle, 1-1 Osakajo, Chuo Ward, Osaka, 540-0002, Japan", "image":"osakaCastle.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Tokyo Skytree',
            'country_id' => 'Japan',
            'attraction_data' => '{"title":"Tokyo Skytree", "location": "Tokyo Skytree, 1 Chome-1-2 Oshiage, Sumida City, Tokyo 131-0045, Japan", "image":"tokyoSkytree1.jpg"}',
            'close_place_1_data' => '{"title":"Mount Fuji", "location": "Mount Fuji, Kitayama, Fujinomiya, Shizuoka 418-0112, Japan", "image":"mountFuji1.jpg"}',
            'close_place_2_data' => '{"title":"Tokyo Tower", "location": "Tokyo Tower, 4 Chome-2-8 Shibakoen, Minato City, Tokyo 105-0011, Japan", "image":"tokyoTower.jpg"}',
            'close_place_3_data' => '{"title":"Osaka Castle", "location": "Osaka Castle, 1-1 Osakajo, Chuo Ward, Osaka, 540-0002, Japan", "image":"osakaCastle.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Eiffel Tower',
            'country_id' => 'France',
            'attraction_data' => '{"title":"Eiffel Tower", "location": "Eiffel Tower, Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France", "image":"eiffel1.jpg"}',
            'close_place_1_data' => '{"title":"Louvre Museum", "location": "Louvre Museum, Rue de Rivoli, 75001 Paris, France", "image":"louvre1.jpg"}',
            'close_place_2_data' => '{"title":"Montmartre", "location": "Montmartre, 75018 Paris, France", "image":"montmarte.jpg"}',
            'close_place_3_data' => '{"title":"Palace of Versailles", "location": "Palace of Versailles, Place d Armes, 78000 Versailles, France", "image":"versailles.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Louvre Museum',
            'country_id' => 'France',
            'attraction_data' => '{"title":"Louvre Museum", "location": "Louvre Museum, Rue de Rivoli, 75001 Paris, France", "image":"louvre1.jpg"}',
            'close_place_1_data' => '{"title":"Eiffel Tower", "location": "Eiffel Tower, Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France", "image":"eiffel1.jpg"}',
            'close_place_2_data' => '{"title":"Montmartre", "location": "Montmartre, 75018 Paris, France", "image":"montmarte.jpg"}',
            'close_place_3_data' => '{"title":"Palace of Versailles", "location": "Palace of Versailles, Place d Armes, 78000 Versailles, France", "image":"versailles.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Leaning Tower of Pisa',
            'country_id' => 'Italy',
            'attraction_data' => '{"title":"Leaning Tower of Pisa", "location": "Leaning Tower of Pisa, Piazza del Duomo, 56126 Pisa PI, Italy", "image":"pisa1.jpg"}',
            'close_place_1_data' => '{"title":"Roman Forum", "location": "Roman Forum, Via della Salara Vecchia, 5/6, 00186 Roma RM, Italy", "image":"romanforum1.jpg"}',
            'close_place_2_data' => '{"title":"Colosseum", "location": "Colosseum, Piazza del Colosseo, 1, 00184 Roma RM, Italy", "image":"colosseum.jpg"}',
            'close_place_3_data' => '{"title":"Pantheon", "location": "Pantheon, Piazza della Rotonda, 00186 Roma RM, Italy", "image":"pantheon.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Roman Forum',
            'country_id' => 'Italy',
            'attraction_data' => '{"title":"Roman Forum", "location": "Roman Forum, Via della Salara Vecchia, 5/6, 00186 Roma RM, Italy", "image":"romanforum1.jpg"}',
            'close_place_1_data' => '{"title":"Leaning Tower of Pisa", "location": "Leaning Tower of Pisa, Piazza del Duomo, 56126 Pisa PI, Italy", "image":"pisa1.jpg"}',
            'close_place_2_data' => '{"title":"Colosseum", "location": "Colosseum, Piazza del Colosseo, 1, 00184 Roma RM, Italy", "image":"colosseum.jpg"}',
            'close_place_3_data' => '{"title":"Pantheon", "location": "Pantheon, Piazza della Rotonda, 00186 Roma RM, Italy", "image":"pantheon.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('attractions')->insert(array(
            'attraction' => 'CN Tower',
            'country_id' => 'Canada',
            'attraction_data' => '{"title":"CN Tower", "location": "CN Tower, 290 Bremner Blvd, Toronto, ON M5V 3L9", "image":"cntower1.jpg"}',
            'close_place_1_data' => '{"title":"Niagara Falls", "location": "Niagara Falls viewpoint, Niagara Falls, ON", "image":"niagara1.jpg"}',
            'close_place_2_data' => '{"title":"Moraine Lake", "location": "Moraine Lake, Improvement District No. 9, AB", "image":"moraineLake.jpg"}',
            'close_place_3_data' => '{"title":"The Butchart Gardens", "location": "The Butchart Gardens, 800 Benvenuto Ave, Brentwood Bay, BC V8M 1J8", "image":"butchartGardens.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Niagara Falls',
            'country_id' => 'Canada',
            'attraction_data' => '{"title":"Niagara Falls", "location": "Niagara Falls viewpoint, Niagara Falls, ON", "image":"niagara1.jpg"}',
            'close_place_1_data' => '{"title":"CN Tower", "location": "CN Tower, 290 Bremner Blvd, Toronto, ON M5V 3L9", "image":"cntower1.jpg"}',
            'close_place_2_data' => '{"title":"Moraine Lake", "location": "Moraine Lake, Improvement District No. 9, AB", "image":"moraineLake.jpg"}',
            'close_place_3_data' => '{"title":"The Butchart Gardens", "location": "The Butchart Gardens, 800 Benvenuto Ave, Brentwood Bay, BC V8M 1J8", "image":"butchartGardens.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Grand Canyon National Park',
            'country_id' => 'United States of America',
            'attraction_data' => '{"title":"Grand Canyon National Park", "location": "Grand Canyon National Park, Arizona, United States", "image":"grandcanyon1.jpg"}',
            'close_place_1_data' => '{"title":"Statue of Liberty National Monument", "location": "Statue of Liberty National Monument, New York, NY 10004, United States", "image":"sol1.jpg"}',
            'close_place_2_data' => '{"title":"Hollywood Sign", "location": "Hollywood Sign, Los Angeles, CA 90068, United States", "image":"hollywood.jpg"}',
            'close_place_3_data' => '{"title":"Golden Gate Bridge", "location": "Golden Gate Bridge, San Francisco, CA, United States", "image":"goldengatebridge.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Statue of Liberty National Monument',
            'country_id' => 'United States of America',
            'attraction_data' => '{"title":"Statue of Liberty National Monument", "location": "Statue of Liberty National Monument, New York, NY 10004, United States", "image":"sol1.jpg"}',
            'close_place_1_data' => '{"title":"Grand Canyon National Park", "location": "Grand Canyon National Park, Arizona, United States", "image":"grandcanyon1.jpg"}',
            'close_place_2_data' => '{"title":"Hollywood Sign", "location": "Hollywood Sign, Los Angeles, CA 90068, United States", "image":"hollywood.jpg"}',
            'close_place_3_data' => '{"title":"Golden Gate Bridge", "location": "Golden Gate Bridge, San Francisco, CA, United States", "image":"goldengatebridge.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Christ the Redeemer',
            'country_id' => 'Brazil',
            'attraction_data' => '{"title":"Christ the Redeemer", "location": "Christ the Redeemer, Parque Nacional da Tijuca - Alto da Boa Vista, Rio de Janeiro - RJ, Brazil", "image":"christtheredeemer1.jpg"}',
            'close_place_1_data' => '{"title":"Tijuca National Park", "location": "Tijuca National Park - Estr. da Cascatinha, 850 - Alto da Boa Vista, Rio de Janeiro - RJ, 20531-590, Brazil", "image":"tijuca1.jpg"}',
            'close_place_2_data' => '{"title":"Copacabana Beach", "location": "Copacabana Beach - Copacabana, Rio de Janeiro - State of Rio de Janeiro, Brazil", "image":"copacabanabeach.jpg"}',
            'close_place_3_data' => '{"title":"Sugarloaf Mountain", "location": "Sugarloaf Mountain - Urca, Rio de Janeiro - State of Rio de Janeiro, Brazil", "image":"sugarloafmt.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Tijuca National Park',
            'country_id' => 'Brazil',
            'attraction_data' => '{"title":"Tijuca National Park", "location": "Tijuca National Park - Estr. da Cascatinha, 850 - Alto da Boa Vista, Rio de Janeiro - RJ, 20531-590, Brazil", "image":"tijuca1.jpg"}',
            'close_place_1_data' => '{"title":"Christ the Redeemer", "location": "Christ the Redeemer, Parque Nacional da Tijuca - Alto da Boa Vista, Rio de Janeiro - RJ, Brazil", "image":"christtheredeemer1.jpg"}',
            'close_place_2_data' => '{"title":"Copacabana Beach", "location": "Copacabana Beach - Copacabana, Rio de Janeiro - State of Rio de Janeiro, Brazil", "image":"copacabanabeach.jpg"}',
            'close_place_3_data' => '{"title":"Sugarloaf Mountain", "location": "Sugarloaf Mountain - Urca, Rio de Janeiro - State of Rio de Janeiro, Brazil", "image":"sugarloafmt.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'Casapueblo',
            'country_id' => 'Uruguay',
            'attraction_data' => '{"title":"Casapueblo", "location": "Casapueblo, 20003 Punta Ballena, Departamento de Maldonado, Uruguay", "image":"casapueblo1.jpg"}',
            'close_place_1_data' => '{"title":"La Mano de Punta del Este", "location": "The Fingers of Punta del Este, Av. Eduardo Victor Haedo km 162.500, 20001 La Barra, Departamento de Maldonado, Uruguay", "image":"puntadeleste1.jpg"}',
            'close_place_2_data' => '{"title":"Palacio Salvo", "location": "Palacio Salvo, Plaza Independencia 848, 11100 Montevideo, Departamento de Montevideo, Uruguay", "image":"palacioSalvo.jpg"}',
            'close_place_3_data' => '{"title":"Santa Teresa National Park", "location": "Santa Teresa National Park, Ruta Nacional N° Km 302, Rocha, Uruguay", "image":"santaTeresaPark.jpg"}',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('attractions')->insert(array(
            'attraction' => 'La Mano de Punta del Este',
            'country_id' => 'Uruguay',
            'attraction_data' => '{"title":"La Mano de Punta del Este", "location": "The Fingers of Punta del Este, Av. Eduardo Victor Haedo km 162.500, 20001 La Barra, Departamento de Maldonado, Uruguay", "image":"puntadeleste1.jpg"}',
            'close_place_1_data' => '{"title":"Casapueblo", "location": "Casapueblo, 20003 Punta Ballena, Departamento de Maldonado, Uruguay", "image":"casapueblo1.jpg"}',
            'close_place_2_data' => '{"title":"Palacio Salvo", "location": "Palacio Salvo, Plaza Independencia 848, 11100 Montevideo, Departamento de Montevideo, Uruguay", "image":"palacioSalvo.jpg"}',
            'close_place_3_data' => '{"title":"Santa Teresa National Park", "location": "Santa Teresa National Park, Ruta Nacional N° Km 302, Rocha, Uruguay", "image":"santaTeresaPark.jpg"}',
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





