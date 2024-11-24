<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use League\Csv\Writer;
use Illuminate\Support\Facades\Log;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'work_start',
        'work_fin',
        'break_start',
        'break_fin',
        'created_at',
        'updated_at',
    ];

    // public function storeWorktime($inputs)
    // {

    //     //勤務開始時間を登録する
    //     if (!is_null($inputs['work_start'])) {

    //         return $this->storeStartTime($inputs);
    //     }

    //     //退勤時間を登録する
    //     if (!is_null($inputs['work_fin'])) {

    //         return $this->storeEndTime($inputs);
    //     }
    // }

    // // 勤怠情報を更新する
    // public function break_time($inputs)
    // {
    //     DB::beginTransaction();

    //     try{
    //         $break_time = $this->fetchWorktimeById($inputs['id']);

    //         $break_time->fill([
    //             'break_start' => $inputs['break_start'],
    //             'break_fin' => $inputs['break_fin'],
    //             'working_flg' => 0,
    //         ]);
    //         $break_time->save();
    //         }
    // }
}
