<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('masp');
            $table->integer('giasp');
            $table->integer('soluong');
            $table->string('image');
            $table->tinytext('tomtat');
            $table->text('noidung');
            $table->tinyInteger('tinhtrang');
            $table->Integer('cate')->unsigned();      //danh muc
            $table->foreign('cate')
                  ->references('id')
                  ->on('categoris')
                  ->onDelete('cascade');  
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
        Schema::dropIfExists('products');
    }
}
