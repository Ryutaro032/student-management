@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="split left">
        <h1>Student Information</h1>
        <a href="{{ route('list') }}" class="btn btn-slide red"><span>学生一覧へ</span></a>
    </div>
    <div class="split right">
        <h1>Register</h1>
        <a href="{{ route('register') }}" class="btn btn-slide blue"><span>新規登録する</span></a>
    </div>
</div>
@endsection