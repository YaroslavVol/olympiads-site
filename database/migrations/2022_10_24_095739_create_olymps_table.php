<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOlympsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olymps', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('year')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_tel')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('data_start')->nullable();
            $table->string('data_end')->nullable();
            $table->string('info_text')->nullable();
            $table->string('link_poloshenie')->nullable();
            $table->string('link_pismo')->nullable();
            $table->string('task_text')->nullable();
            $table->string('link_task')->nullable();
            $table->string('link_sert')->nullable();
            $table->string('itogy_text')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('olymps');
    }
}
