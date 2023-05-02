<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生管理システム</title>
</head>
<body>
    <header></header>
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
                    <option value=""></option>
                </select>
            </div>
            <div>
                <input type="button" value="検索">
            </div>
        </form>
    </div>
    <main>
        <table>
            <thead>
                <tr>
                    <th>学年</th>
                    <th>名前</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->grade }}</td>
                    <td>{{ $student->name }}</td>
                    <td>
                        <a href="{{ route('person') }}">
                            <button type="submit">学生の情報へ</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>