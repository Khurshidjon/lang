<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_uz')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->longText('body_uz')->nullable();
            $table->longText('body_en')->nullable();
            $table->longText('body_ru')->nullable();
            $table->integer('status')->nullable()->default(0)->comment("1-unpublished, 2-published");
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
        Schema::dropIfExists('pages');
    }
}
