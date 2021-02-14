<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangingShippingServiceFieldToAddDefaultStandardToWorkOrderItem extends Migration
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
            $table->string('shipping_service')->default("Standard")->change();
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
            $table->string('shipping_service')->default(null)->change();
        });
    }
}
