{{-- 勤怠管理ページ --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__inner">
    <table>
        <tr class="category">
            <th>名前</th>
            <th>勤務開始</th>
            <th>勤務終了</th>
            <th>休憩時間</th>
            <th>勤務時間</th>
        </tr>
        @foreach ($admins as $admin)
        <tr>
            <td>
                {{-- admin(配列)からname(値)を取り出す --}}
                {{$admin->name}}
            </td>
            <td>
                {{$admin->work_start}}
            </td>
            <td>
                {{$admin->work_fin}}
            </td>
            <td>
                {{$admin->break_time}}
            </td>
            <td>
                {{$admin->work_time}}
            </td>
        </tr>
        @endforeach
    </table>
    {{$admins->links('vendor.pagination.default')}}
</div>
@endsection