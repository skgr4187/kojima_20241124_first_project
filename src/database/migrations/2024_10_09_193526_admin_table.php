<!-- 勤怠管理テーブル -->
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            // $table->date('date');
            $table->string('name');
            $table->string('work_start');
            $table->string('work_fin');
            $table->string('break_start')->nullable();
            $table->string('break_fin')->nullable();
            $table->string('break_time')->nullable();
            $table->string('work_time')->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }

    // public function down()
    // {
    //     Schema::table('admins', function (Blueprint $table) {
    //         $table->dropColumn(['work_start', 'work_fin', 'break_start', 'break_fin']);
    //     });
    // }
}
