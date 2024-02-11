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
        Schema::create('vats_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("ip")->comment("ip адрес");
            $table->string("method", 20)->comment("Метод запроса");
            $table->string("cmd")->comment("Поступившая команда");
            $table->string("phone")->comment("Телефон");
            $table->json("src_content")->comment("Содержимое запроса");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vats_messages');
    }
};
