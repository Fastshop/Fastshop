<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAdminMenu extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {

        Schema::table('admin_menu', function(Blueprint $table) {
            $table->json('extra')->nullable()->comment('扩展设置');
            $table->comment("后台菜单");
        });

    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('admin_menu', function(Blueprint $table) {
            //
        });
    }
}
