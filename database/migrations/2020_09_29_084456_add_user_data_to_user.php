<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserDataToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('hp')->nullable()->after("email");
            $table->unsignedInteger('affiliasi')->default(0)->after("hp");
            $table->string('nama_bank')->nullable()->after("affiliasi");
            $table->string('no_rek')->nullable()->after("nama_bank");
            $table->string('nama_rek')->nullable()->after("no_rek");
            $table->string('instansi')->nullable()->after("nama_rek");
            $table->string('ref')->nullable()->after("instansi");
            $table->string('ref_by')->nullable()->after("ref");
            $table->unsignedInteger('status_pembayaran')->default(0)->after("ref_by");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('hp');
            $table->dropColumn('instansi');
            $table->dropColumn('ref');
            $table->dropColumn('ref_by');
            $table->dropColumn('status_pembayaran');
        });
    }
}
