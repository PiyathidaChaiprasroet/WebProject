<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminsettings', function (Blueprint $table) {
            $table->id();
            $table->string('name_m');
            $table->date('date');
            $table->string('runtime');
            $table->string('genre');
            $table->string('directors');
            $table->string('story');
            $table->string('poster');
            $table->string('teaser', 255);
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminsettings');
    }
};
