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
    public function up(): void
{
    Schema::create('saved_list_songs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('saved_list_id')->constrained()->onDelete('cascade');
        $table->foreignId('song_id')->constrained()->onDelete('cascade');
        $table->integer('position')->nullable(); // order in the list
        $table->timestamp('added_at')->nullable();
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
        Schema::dropIfExists('saved_list_songs');
    }
};
