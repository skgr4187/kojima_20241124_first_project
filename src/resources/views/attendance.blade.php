{{-- 打刻ページ--}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div class="time-stamp__inner">
    <h2>福場凛太朗さんお疲れ様です！</h2>
    <div class="time-stamp__form">
        <form class="time-stamp" action="work_start" method="post">
        @csrf
            <input class="time-stamp__form__work_start" type="submit" name="work_start" value="勤務開始">
        </form>
        <form class="time-stamp" action="work_fin" method="post">
        @csrf
            <input class="time-stamp__form__work_fin" type="submit" name="work_fin" value="勤務終了">
        </form>
        <form class="time-stamp" action="break_start" method="post">
        @csrf
            <input class="time-stamp__form__break_start" type="submit" name="break_start" value="休憩開始">
        </form>
        <form class="time-stamp" action="break_fin" method="post">
        @csrf
            <input class="time-stamp__form__break_fin" type="submit" name="break_fin" value="休憩終了">
        </form>
    </div>
</div>
@endsection