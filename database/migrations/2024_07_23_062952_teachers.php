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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('slug');
            $table->binary('gender');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('status');
            $table->string('img_name')->default('images/profile/profile-img.png');
            $table->foreignId('teachers_datas_id')->nullable()->index();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('teachers_datas', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('slug');
            $table->string('nip')->nullable()->default('-');
            $table->string('nuptk')->nullable()->default('-');
            $table->string('position');
            $table->string('gol')->nullable()->default('-');
            $table->string('ijazah');
            $table->string('subjects');
            $table->year('ijazah_date');
            $table->date('start_up_teaching');
            $table->date('start_working');
            $table->string('certificate_status')->nullable()->default('-');
            $table->year('certificate_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('teachers_datas');
    }
};
