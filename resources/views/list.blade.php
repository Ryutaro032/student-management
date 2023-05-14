@extends('layouts.layout')
@section('content')
    <div class="list-content">
        <div class="search">
            <form action="" method="post">
            @csrf
                <div>
                    <label for="">学生名</label>
                    <input type="text" value="">
                </div>
                <div>
                    <label for="">学年</label>
                    <select name="" id="">
                        <option value="0"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div>
                    <input class="" type="button" value="検索">
                </div>
            </form>
        </div>
        <div class="main">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">学年</th>
                        <th scope="col">名前</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->grade }}</td>
                        <td>{{ $student->name }}</td>
                        <td>
                            <a href="{{ route('person',['id'=>$student->id])}}" >
                                <button class="btn btn-info">学生の情報へ</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 @endsection