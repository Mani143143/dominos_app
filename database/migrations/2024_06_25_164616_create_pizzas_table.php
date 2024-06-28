<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User; // Importa la clase User

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void 
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class); // Utiliza la clase User importada
            $table->string('size');
            $table->string('crust');
            $table->json('toppings');
            $table->string('status');
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
        Schema::dropIfExists('pizzas');
    }
};