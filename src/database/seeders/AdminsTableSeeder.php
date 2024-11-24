<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $param = ['date' => 'today'];
        // DB::table('admins')->insert($param);

        $param = [
            'name' => 'テスト太郎',
            'work_start' => '10:00:00',
            'work_fin' => '20:00:00',
            'break_time' => '00:30:00',
            'work_time' => '09:30:00',
        ];
        // adminテーブルに$paramのデータを挿入する
        DB::table('admins')->insert($param);

        $param = [
            'name' => 'テスト次郎',
            'work_start' => '10:00:10',
            'work_fin' => '20:00:00',
            'break_time' => '00:30:00',
            'work_time' => '09:29:50',
        ];
        DB::table('admins')->insert($param);

        $param = [
            'name' => 'テスト三郎',
            'work_start' => '10:00:10',
            'work_fin' => '20:00:00',
            'break_time' => '00:30:00',
            'work_time' => '09:29:50',
        ];
        DB::table('admins')->insert($param);

        $param = [
            'name' => 'テスト四郎',
            'work_start' => '10:00:20',
            'work_fin' => '20:00:00',
            'break_time' => '00:30:00',
            'work_time' => '09:29:40',
        ];
        DB::table('admins')->insert($param);

        $param = [
            'name' => 'テスト五郎',
            'work_start' => '10:00:20',
            'work_fin' => '20:00:00',
            'break_time' => '00:30:00',
            'work_time' => '09:29:40',
        ];
        DB::table('admins')->insert($param);


        Admin::factory()->count(30)->create();
    }
}
