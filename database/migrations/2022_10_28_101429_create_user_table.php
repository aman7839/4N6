<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('user_name')->nullable();
            $table->integer('password')->nullable();
            $table->string('image')->nullable();
            $table->string('school_email_address')->unique()->nullable();
            $table->string('personal_email_address')->unique()->nullable();
            $table->string('head_coach_name')->nullable();
            $table->integer('school_phone_no')->nullable();
            $table->string('school_name')->nullable();
            $table->integer('personal_phone_no')->nullable();
            $table->string('school_address')->nullable();
            $table->string('assistant_coach_name')->nullable();
            $table->string('school_city')->nullable();
            $table->string('assistant_coach_email_address')->nullable();
            $table->string('school_state')->nullable();
            $table->integer('school_zip_code')->nullable();
            $table->string('billing_contact_name')->nullable();
            $table->string('billing_email_address')->nullable();
            $table->integer('billing_phone_no')->nullable();
            $table->enum('role', ['coaches', 'students','users','assistantCoach'])->default('user');
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
        Schema::dropIfExists('user');
    }
}
