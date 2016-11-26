@extends('layout')

@section('content')

<div class='container'>

    <div class='row'>
        <div class='col-md-12'>
            <h2 style='color: #009688;'>做網站要多少錢</h2>
            <p style='color: #757575;'>
                關於做網站的各種功能與價格說明清單
                <i class="fa fa-dollar" aria-hidden="true"></i>
                <i class="fa fa-dollar" aria-hidden="true"></i>
                <i class="fa fa-dollar" aria-hidden="true"></i>
            </p>
        </div>
    </div>
    <br>
    <div class='row item-box -header'>
        <div class='col-md-1'>
            功能名稱
        </div>
        <div class='col-md-4'>
            基本款 - 功能說明（至少要收這些錢）
        </div>
        <div class='col-md-4'>
            進階版 - 功能說明（這些全部要加錢）
        </div>
        <div class='col-md-1'>
            價格
        </div>
        <div class='col-md-1'>
            工時
        </div>
        <div class='col-md-1'>
            說明人
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-1'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-4'>
            {!! ($row[1]) !!}
            <div class='visible-xs-block'>
                <hr class='mobile-hr'>
            </div>
        </div>
        <div class='col-md-4'>
            {!! ($row[2]) !!}
        </div>
        <div class='col-md-1'>
            {{ $row[3] }}
        </div>
        <div class='col-md-1'>
            {{ $row[4] }}
        </div>
        <div class='col-md-1'>
            {{ $row[5] }}
        </div>
    </div>
    @endforeach
    <br>
    <br>
    <br>
</div>

<style>
    body {
        font-size: 15px;
        line-height: 1.7em;
    }

    .item-box {
        border-bottom: 1px solid #B2DFDB;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .item-box:nth-child(odd) {
        background-color: #E0F2F1;
    }

    .item-box.-header {
        background-color: #009688;
        color: white;
    }

    .item-box .title {
        font-weight: bold;
        font-size: 16px;
    }

    .mobile-hr {
        margin-top: 10px;
        margin-bottom: 10px;
        border-color: #BDBDBD;
        border-style: dashed;
        border-top-width: 2px;
    }

</style>
@endsection
