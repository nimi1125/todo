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
        Schema::table('todos', function (Blueprint $table) {
            $table->date('due_date')->default(DB::raw('CURRENT_DATE'))->change();
        });
    }
    
    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->date('due_date')->default(null)->change(); // デフォルト値を元に戻す
        });
    }
    
};
