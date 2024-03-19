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
        Schema::create('autor_libro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('libro_id');
            $table->softDeletes();


            $table->foreign("autor_id")->references("id")->on("autor");
            $table->foreign("libro_id")->references("id")->on("libro");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autor_libro');
    }
};
