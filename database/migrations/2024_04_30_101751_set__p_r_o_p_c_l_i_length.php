<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('clienteswebs', function(Blueprint $table) {
            $table->string('PROPCLI', 500)->nullable()->change();
        });
    }


    public function down()
    {
        Schema::table('clienteswebs', function(Blueprint $table) {
            $table->string('PROPCLI', 30)->nullable()->change();
        });
    }
};
