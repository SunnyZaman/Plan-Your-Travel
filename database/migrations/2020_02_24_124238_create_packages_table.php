<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // <- For string foreign keys
            $table->string('title')->primary();
            $table->date('start_date');
            $table->integer('duration');
            $table->bigInteger('tour_id');
            $table->text('locations');
            $table->text('attractions');
            $table->text('package_includes');
            $table->float('air_fare');
            $table->float('total_price');
            $table->timestamps();
        });

        DB::table('packages')->insert(array(
            'title' => 'Week in Europe',
            'start_date' => date('2020-10-13'),
            'duration' => 7,
            'tour_id' => 212144,
            'locations' => '{"data":[{"place":"France"},{"place":"Italy"}]}',
            'attractions' => '{"data":[{"place":"Louvre Museum", "location":"Louvre Museum, Rue de Rivoli, 75001 Paris, France"}, {"place":"Eiffel Tower", "location":"Eiffel Tower, Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France"}, {"place":"Leaning Tower of Pisa", "location":"Leaning Tower of Pisa, Piazza del Duomo, 56126 Pisa PI, Italy"}, {"place":"Roman Forum", "location":"Roman Forum, Via della Salara Vecchia, 5/6, 00186 Roma RM, Italy"}]}',
            'package_includes' => '{"data":[{"package":"7 nights in handpicked hotels"},{"package":"5 dinners with beer or wine"},{"package":"4 guided sightseeing tours"},{"package":"1 on-tour flight"}]}',
            'air_fare' =>89.99,
            'total_price' => 1499.99

        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
