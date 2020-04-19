<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_uz')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('url')->nullable()->default('javascript:void(0)');
            $table->integer( 'page_id')->nullable();
            $table->integer( 'parent_id')->nullable();
            $table->integer( 'is_parent')->nullable()->default(0);
            $table->integer( 'is_footer')->nullable()->default(0);
            $table->string('target')->nullable()->default('_self')->comment("_blank or _self");
            $table->integer( 'status')->nullable()->default(0)->comment("1-unpublished, 2-published");
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
        Schema::dropIfExists('menus');
    }
}
