<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (config('atlas.modules.states') === false) {
            return;
        }

        Schema::create(config('atlas.states_tablename'), function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->index();
            $table->string('name');
            $table->string('country_code', 3);
            $table->string('state_code', 5);
            $table->string('type')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('atlas.states_tablename'));
    }
}
