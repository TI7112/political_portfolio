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
        Schema::create('tbl_role', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('access');
            $table->timestamps();
        });
        Schema::create('tbl_janta_darbar', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('image')->nullable();
            $table->text('agenda')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('status')->nullable();
            $table->text('location')->nullable();
            $table->text('author')->nullable();
            $table->timestamps();
        });
        Schema::create('tbl_rally', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('image')->nullable();
            $table->text('contact_person')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->date('event_date')->nullable();
            $table->text('location')->nullable();
            $table->text('author')->nullable();
            $table->timestamps();
        });
        Schema::create('tbl_staff', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->text('image')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('work_area')->nullable();
            $table->timestamps();
        });
        Schema::create('tbl_upcomming_event', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->date('event_date')->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->text('author')->nullable();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_role');
        Schema::dropIfExists('tbl_janta_darbar');
        Schema::dropIfExists('tbl_rally');
        Schema::dropIfExists('tbl_staff');
        Schema::dropIfExists('tbl_upcomming_event');
    }
};
