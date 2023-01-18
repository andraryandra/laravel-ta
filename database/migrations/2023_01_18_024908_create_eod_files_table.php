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
        Schema::create('eod_files', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('eod_id');

            $table->string('name_url')->nullable();
            $table->string('url');
            $table->string('type_url')->nullable();
            $table->string('size_url')->nullable();

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
        Schema::dropIfExists('eod_files');
    }
};
