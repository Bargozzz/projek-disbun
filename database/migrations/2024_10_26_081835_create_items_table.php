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
        Schema::create('items', function (Blueprint $table) {
            $table->id('id_item');
            $table->unsignedBigInteger('id_komoditas');
                $table->foreign('id_komoditas')->references('id_komoditas')->on('komoditas'); 

                // $table->foreignId('id_komoditas')->constrained(
                //     table: 'komoditas', indexName: 'item_komo_id'
                // );
            
            $table->string('nama_item');
            $table->string('latin_item');
            $table->text('deskripsi');
            $table->text('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
