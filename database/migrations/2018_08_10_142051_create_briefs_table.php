<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBriefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email', 128);
            $table->string('company_name')->nullable();
            $table->string('activity')->nullable();
            $table->string('service', 20)->nullable();
            $table->string('price')->nullable();
            $table->tinyInteger('credit')->default(0);
            $table->text('company_site')->nullable();
            $table->string('term')->nullable();
            $table->text('structure')->nullable();
            $table->tinyInteger('blog')->default(0);
            $table->tinyInteger('mobile_version')->default(0);
            $table->tinyInteger('multi_languages')->default(0);
            $table->tinyInteger('online_pay')->default(0);
            $table->tinyInteger('google_analytics')->default(0);
            $table->tinyInteger('gallery')->default(0);
            $table->tinyInteger('search')->default(0);
            $table->tinyInteger('registration')->default(0);
            $table->tinyInteger('online_consultant')->default(0);
            $table->tinyInteger('maps')->default(0);
            $table->text('sites_like')->nullable();
            $table->text('sites_dislike')->nullable();
            $table->text('statistic')->nullable();
            $table->string('design', 20)->nullable();
            $table->string('logo')->nullable();
            $table->string('color')->nullable();
            $table->text('basic_site')->nullable();
            $table->tinyInteger('photosession')->default(0);
            $table->tinyInteger('copywriter')->default(0);
            $table->tinyInteger('add_content')->default(0);
            $table->tinyInteger('support')->default(0);
            $table->tinyInteger('update_content')->default(0);
            $table->text('details')->nullable();
            $table->string('document')->nullable();
            $table->string('status')->default('new');
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
        Schema::dropIfExists('briefs');
    }
}
