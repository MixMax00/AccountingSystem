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
        Schema::create('allowcation_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('allowcation_id')
                    ->constrained('allocations')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('head_name');
            $table->integer('code');
            $table->double('allowcation',10,2);
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
        Schema::dropIfExists('allowcation_lists');
    }
};
