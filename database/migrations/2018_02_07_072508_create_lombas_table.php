<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Lomba;
class CreateLombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lombas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('deskripsi');
            $table->date('tanggal_tutup');
            $table->string('poster');
            $table->timestamps();//informasi kapan dibuat
        });

        //Start Membuat user FAKE
        $faker=Faker\factory::create();
        for($i=0;$i<10;$i++){
            $lomba = new Lomba();
            $lomba->name = $faker->word;
            $lomba->deskripsi = $faker->text($maxNbChars=191);
            $lomba->tanggal_tutup = $faker->date($format = 'Y-m-d', $max = 'now');
            $lomba->poster = $faker->imageUrl($width = 620, $height = 877);
            $lomba->save();
        }
        //END fake
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lombas');
    }
}
