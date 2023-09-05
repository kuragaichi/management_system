@extends('layouts.app')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }

    svg.w-5.h-5 {
        /*paginateメソッドの矢印の大きさ調整のために追加*/
        width: 30px;
        height: 30px;
    }
</style>

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
@endsection

@section('header')
<div class="header__nav">
    <ul class="header__nav-list">
        <li class="header__nav-list-item">
            <a href="">ホーム</a>
        </li>
        <li class="header__nav-list-item">
            <a href="">日付一覧</a>
        </li>
        <li class="header__nav-list-item">
            <a href="">ログアウト</a>
        </li>
    </ul>
</div>
@endsection

@section('content')

<div class="data__content">
    <div class="data-table">
        <table class="data-table__title">
            <tr>
                <th>日付</th>
            </tr>
            @foreach ($authors as $author)
            <tr>
                <td>
                    {{$author->getDetail()}}
                </td>
            </tr>
            @endforeach
        </table>
        {{ $authors->links() }}
    </div>

    <div class="data-table">
        <table class="data-table__inner">
            <tr class="data-table__row">
                <th class="data-table__header">名前</th>
                <th class="data-table__header">勤務開始</th>
                <th class="data-table__header">勤務終了</th>
                <th class="data-table__header">休憩時間</th>
                <th class="data-table__header">勤務時間</th>
            </tr>
            <tr class="data-table__row">
                <td class="data-table__item">
                    <div class="update-form__item">
                        <input class="update-form__item-input" type="text" name="content" value="テスト太郎">
                    </div>
                </td>
                <td class="data-table__item">
                    <div class="update-form__item">
                        <input class="update-form__item-input" type="text" name="content" value="10:00:00">
                    </div>
                </td>
                <td class="data-table__item">
                    <div class="update-form__item">
                        <input class="update-form__item-input" type="text" name="content" value="20:00:00">
                    </div>
                </td>
                <td class="data-table__item">
                    <div class="update-form__item">
                        <input class="update-form__item-input" type="text" name="content" value="00:30:00">
                    </div>
                </td>
                <td class="data-table__item">
                    <div class="update-form__item">
                        <input class="update-form__item-input" type="text" name="content" value="09:30:00">
                    </div>
                </td>
            </tr>
        </table>
        <div class="data-table">
            <table class="data-table__pagination">
                <tr>
                    <th>日付</th>
                </tr>
                @foreach ($authors as $author)
                <tr>
                    <td>
                        {{$author->getDetail()}}
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $authors->links() }}
        </div>
    </div>
    @endsection