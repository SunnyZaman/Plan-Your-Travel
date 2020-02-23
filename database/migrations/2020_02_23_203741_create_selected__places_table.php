<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectedPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected_places', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // <- For string foreign keys
            $table->string('selected_place')->primary();
            $table->string('selected_image1');
            $table->string('selected_image2');
            $table->string('location');
            $table->text('description');
            $table->timestamps();
        });
         DB::table('selected_places')->insert(array(
            'selected_place' => 'Great Sphinx of Giza',
            'selected_image1' => 'sphinx1.jpg',
            'selected_image2' => 'sphinx2.jpg',
            'location' => 'Great Sphinx of Giza, Al Giza Desert, Giza Governorate, Egypt',
            'description' => 'A limestone statue of a reclining sphinx, a mythical creature with the body of a lion and the head of a human. The face of the Sphinx is generally believed to represent the pharaoh Khafre.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Abu Simbel Temples',
            'selected_image1' => 'abuSimbelTemples1.jpg',
            'selected_image2' => 'abuSimbelTemples2.jpg',
            'location' => 'Abu Simbel Temples, Abu Simbel, Aswan Governorate, Egypt',
            'description' => 'Serve as a lasting monument to the king and his queen Nefertari, and commemorate his victory at the Battle of Kadesh. Their huge external rock relief figures have become iconic.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Hwange National Park',
            'selected_image1' => 'hwangeNationalPark1.jpg',
            'selected_image2' => 'hwangeNationalPark2.jpg',
            'location' => 'Hwange National Park, Zimbabwe',
            'description' => 'The largest natural reserve in Zimbabwe. It was founded in 1928, with the first warden being by the 22-year-old Ted Davison.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Victoria Falls National Park',
            'selected_image1' => 'victoriaFalls1.jpg',
            'selected_image2' => 'victoriaFalls2.jpg',
            'location' => 'Victoria Falls, Zimbabwe',
            'description' => 'In north-western Zimbabwe protects the south and east bank of the Zambezi River in the area of the world-famous Victoria Falls.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('selected_places')->insert(array(
            'selected_place' => 'Taj Mahal',
            'selected_image1' => 'tajMahal1.jpg',
            'selected_image2' => 'tajMahal2.jpg',
            'location' => 'Taj Mahal, Dharmapuri, Forest Colony, Tajganj, Agra, Uttar Pradesh 282001, India',
            'description' => 'An ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned from 1628 to 1658) to house the tomb of his favourite wife, Mumtaz Mahal.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Amber Palace',
            'selected_image1' => 'amberPalace1.jpg',
            'selected_image2' => 'amberPalace2.jpg',
            'location' => 'Amber Palace, Devisinghpura, Amer, Jaipur, Rajasthan 302001, India',
            'description' => 'Located high on a hill, it is the principal tourist attraction in Jaipur.[3][4] Amer Fort is known for its artistic style elements. With its large ramparts and series of gates and cobbled paths, the fort overlooks Maota Lake.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Mount Fuji',
            'selected_image1' => 'mountFuji1.jpg',
            'selected_image2' => 'mountFuji2.jpg',
            'location' => 'Mount Fuji, Kitayama, Fujinomiya, Shizuoka 418-0112, Japan',
            'description' => 'The highest volcano in Japan at 3,776.24 m (12,389 ft), 2nd-highest volcano of an island in Asia (after Mount Kerinci in Sumatra), and 7th-highest peak of an island in the world.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Tokyo Skytree',
            'selected_image1' => 'tokyoSkytree1.jpg',
            'selected_image2' => 'tokyoSkytree2.jpg',
            'location' => 'Tokyo Skytree, 1 Chome-1-2 Oshiage, Sumida City, Tokyo 131-0045, Japan',
            'description' => 'A broadcasting and observation tower in Sumida, Tokyo. It became the tallest structure in Japan in 2010 and reached its full height of 634.0 metres (2,080 ft) in March 2011, making it the tallest tower in the world.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Eiffel Tower',
            'selected_image1' => 'eiffel1.jpg',
            'selected_image2' => 'eiffel2.jpg',
            'location' => 'Eiffel Tower, Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France',
            'description' => 'Constructed from 1887 to 1889 as the entrance to the 1889 Worlds Fair. The tower is 324 metres (1,063 ft) tall, about the same height as an 81-storey building, and the tallest structure in Paris. Its base is square, measuring 125 metres (410 ft) on each side.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Louvre Museum',
            'selected_image1' => 'louvre1.jpg',
            'selected_image2' => 'louvre2.jpg',
            'location' => 'Louvre Museum, Rue de Rivoli, 75001 Paris, France',
            'description' => 'The worlds largest art museum and a historic monument in Paris, France. A central landmark of the city, it is located on the Right Bank of the Seine in the citys 1st arrondissement.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Leaning Tower of Pisa',
            'selected_image1' => 'pisa1.jpg',
            'selected_image2' => 'pisa2.jpg',
            'location' => 'Leaning Tower of Pisa, Piazza del Duomo, 56126 Pisa PI, Italy',
            'description' => 'The campanile, or freestanding bell tower, of the cathedral of the Italian city of Pisa, known worldwide for its nearly four-degree lean, the result of an unstable foundation.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Roman Forum',
            'selected_image1' => 'romanforum1.jpg',
            'selected_image2' => 'romanforum2.jpg',
            'location' => 'Roman Forum, Via della Salara Vecchia, 5/6, 00186 Roma RM, Italy',
            'description' => 'A rectangular forum (plaza) surrounded by the ruins of several important ancient government buildings at the center of the city of Rome. Citizens of the ancient city referred to this space, originally a marketplace, as the Forum Magnum, or simply the Forum.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('selected_places')->insert(array(
            'selected_place' => 'CN Tower',
            'selected_image1' => 'cntower1.jpg',
            'selected_image2' => 'cntower2.jpg',
            'location' => 'CN Tower, 290 Bremner Blvd, Toronto, ON M5V 3L9',
            'description' => 'Concrete communications and observation tower. Built on the former Railway Lands, it was completed in 1976. Its name "CN" originally referred to Canadian National, the railway company that built the tower.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Niagara Falls',
            'selected_image1' => 'niagara1.jpg',
            'selected_image2' => 'niagara2.jpg',
            'location' => 'Niagara Falls viewpoint, Niagara Falls, ON',
            'description' => 'A group of three waterfalls at the southern end of Niagara Gorge, spanning the border between the US state of New York and the Canadian province of Ontario. The largest of the three is Horseshoe Falls, also known as Canadian Falls, which straddles the international border between Canada and the United States.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Grand Canyon National Park',
            'selected_image1' => 'grandcanyon1.jpg',
            'selected_image2' => 'grandcanyon2.jpg',
            'location' => 'Grand Canyon National Park, Arizona, United States',
            'description' => 'The central feature is the Grand Canyon, a gorge of the Colorado River, which is often considered one of the Wonders of the World. The park, which covers 1,217,262 acres (1,901.972 sq mi; 4,926.08 km2) of unincorporated area in Coconino and Mohave counties.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Statue of Liberty National Monument',
            'selected_image1' => 'sol1.jpg',
            'selected_image2' => 'sol2.jpg',
            'location' => 'Statue of Liberty National Monument, New York, NY 10004, United States',
            'description' => 'The statue is a figure of Libertas, a robed Roman liberty goddess. She holds a torch above her head with her right hand, and in her left hand carries a tabula ansata inscribed JULY IV MDCCLXXVI (July 4, 1776 in Roman numerals), the date of the U.S. Declaration of Independence.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Christ the Redeemer',
            'selected_image1' => 'christtheredeemer1.jpg',
            'selected_image2' => 'christtheredeemer2.jpg',
            'location' => 'Christ the Redeemer, Parque Nacional da Tijuca - Alto da Boa Vista, Rio de Janeiro - RJ, Brazil',
            'description' => 'An Art Deco statue of Jesus Christ in Rio de Janeiro, Brazil, created by French sculptor Paul Landowski and built by Brazilian engineer Heitor da Silva Costa, in collaboration with French engineer Albert Caquot. Romanian sculptor Gheorghe Leonida fashioned the face.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Tijuca National Park',
            'selected_image1' => 'tijuca1.jpg',
            'selected_image2' => 'tijuca2.jpg',
            'location' => 'Tijuca National Park - Estr. da Cascatinha, 850 - Alto da Boa Vista, Rio de Janeiro - RJ, 20531-590, Brazil',
            'description' => 'A tropical rainforest in the city of Rio de Janeiro, Brazil. It is claimed to be the worlds largest urban forest, covering some 32 km² (12.4 mi²).',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'Casapueblo',
            'selected_image1' => 'casapueblo1.jpg',
            'selected_image2' => 'casapueblo2.jpg',
            'location' => 'Casapueblo, 20003 Punta Ballena, Departamento de Maldonado, Uruguay',
            'description' => 'A building constructed by the Uruguayan artist Carlos Páez Vilaró. It was originally a summer house and workshop of the artist. It now houses a museum, an art gallery, a cafeteria and a hotel. It was the permanent residence of its creator, where he worked and spent his last days.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('selected_places')->insert(array(
            'selected_place' => 'La Mano de Punta del Este',
            'selected_image1' => 'puntadeleste1.jpg',
            'selected_image2' => 'puntadeleste2.jpg',
            'location' => 'The Fingers of Punta del Este, Av. Eduardo Victor Haedo km 162.500, 20001 La Barra, Departamento de Maldonado, Uruguay',
            'description' => 'Depicts five human fingers partially emerging from sand. It is also known as either Monumento al Ahogado (Monument to the Drowning Man), Los Dedos (The Fingers), or Hombre emergiendo a la vida (Man Emerging into Life). In English, its popular name is The Hand.',
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
        Schema::dropIfExists('selected__places');
    }
}
