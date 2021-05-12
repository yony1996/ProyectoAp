<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToAppoiments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appoiments', function (Blueprint $table) {
            //resevada,confirmada,atendida y cancelada
            $table->string('status')->default('Reservada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appoiments', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
