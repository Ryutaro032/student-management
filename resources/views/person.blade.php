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
                        <a href="{{ route('persnalEdit') }}">
                            <button type="submit">情報を編集する</button>
                        </a>
                        <a href="{{ route('list') }}">
                            <button>一覧に戻る</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('add') }}">
                            <button>成績を追加する</button>
                        </a>
                        <a href="{{ route('gradesEdit') }}">
                            <button>成績を編集する</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>