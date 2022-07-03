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
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('student_name');
            $table->string('student_fathername');
            $table->string('student_mothername');
            $table->string('student_email');
            $table->string('student_phone');
            $table->string('student_address');
            $table->string('student_image');
            $table->string('student_password');
            $table->string('student_department');
            $table->string('student_admissionyear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_tbl');
    }
};
