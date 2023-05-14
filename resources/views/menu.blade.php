@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="menu-content">
        <div class="split left">
            <h1 class="menu-letter">Student Information</h1>
            <a href="{{ route('list') }}" class="btn menu-btn btn-slide red"><span>学生一覧へ</span></a>
        </div>
        <div class="split right">
            <h1 class="menu-letter">Register</h1>
            <a href="{{ route('register') }}" class="btn menu-btn btn-slide blue"><span>新規登録する</span></a>
        </div>
    </div>
</div>
@endsection