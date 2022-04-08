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
        Schema::create('job__details', function (Blueprint $table) {
            $table->id();
            $table->string("company");
            $table->string("email")->unique();
            $table->string("address");
            $table->string("job");
            $table->string("department");
            $table->text("requirement")->change();
            $table->text("description")->change();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job__details');
    }
};
