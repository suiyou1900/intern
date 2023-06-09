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
        Schema::create('engineers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('first_name_furigana');
            $table->string('last_name_furigana');
            $table->integer('gender');
            $table->date('birthday');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('prefecture');
            $table->string('address');
            $table->integer('postalcode');
            $table->string('station');
            $table->string('background');
            $table->string('resume');
            $table->string('job_history_sheet');
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engineers');
    }
};
