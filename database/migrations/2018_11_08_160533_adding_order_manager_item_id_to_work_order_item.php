<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingOrderManagerItemIdToWorkOrderItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workorder_item', function (Blueprint $table) {
            //
            $table->string('order_manager_item_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workorder_item', function (Blueprint $table) {
            //
            $table->dropColumn(['order_manager_item_id']);
        });
    }
}
