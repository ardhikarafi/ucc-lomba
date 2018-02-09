<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->nullable();//membolehkan inputan NULL, doc migration
            $table->string('alamat')->nullable();
            $table->string('nohp')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user->name= 'admin';
        $user->email= 'admin@gmail.com';
        $user->password= bcrypt ('rahasia');
        $user->role = 'admin';
        $user->save();
        //php artisan migrate:fresh untuk merefresh database dan migrate data yang baru
        //Start Membuat user FAKE
        $faker=Faker\factory::create();
        for($i=0;$i<10;$i++){
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->unique()->email;
            $user->password = bcrypt('rahasia');
            $user->role = 'users';
            $user->save();
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
        Schema::dropIfExists('users');
    }
}
