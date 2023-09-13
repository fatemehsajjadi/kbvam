<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAlarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alarms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('alarms')->insert(
            array(
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?'],
                ['title' => 'lorem', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate dicta dignissimos exercitationem illum impedit inventore, libero, non odit optio porro provident qui quis recusandae reprehenderit, sapiente sunt vel voluptatum?']
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alarms');
    }
}
