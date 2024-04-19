<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clienteswebs', function (Blueprint $table) {
            $table->id();
            $table->string("NIFCLI");
            $table->string("NOMBREFIS");
            $table->string("NOMBRECOM");
            $table->string("DOMCLI");
            $table->string("CPOCLI");
            $table->string("POBCLI");
            $table->string("PROCLI");
            $table->string("PAIS");
            $table->string("TELCLI");
            $table->string("TELF2")->nullable();
            $table->string("Movil")->nullable();
            $table->string("FAXCLI")->nullable();
            $table->string("EMACLI");
            $table->string("WEBCLI")->nullable();
            $table->string("FPACLI");
            $table->string("IBANCLI")->nullable();
            $table->string("DP1CLI")->nullable();
            $table->string("DP2CLI")->nullable();
            $table->string("MENSAJE")->nullable();
            $table->string("OBSCLI")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clienteswebs');
    }
};
